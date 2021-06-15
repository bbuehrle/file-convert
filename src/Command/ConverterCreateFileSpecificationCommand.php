<?php

namespace App\Command;

use App\Entity\Columns\TextColumn;
use App\Entity\FileSpecification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Style\SymfonyStyle;

class ConverterCreateFileSpecificationCommand extends Command
{
    protected static $defaultName = 'converter:create:file-specification';
    protected static $defaultDescription = 'Create a new file specification.';
    protected string $import;
    protected array $fieldSeparators = [
        '|' => 'pipe',
        '\\t' => 'tab',
        ',' => 'comma',
    ];
    protected array $textSeparators = [
        '"' => 'double quotes',
        '\'' => 'single quotes',
        '' => 'none',
    ];
    protected EntityManagerInterface $manager;
    protected QuestionHelper $helper;

    public function __construct(string $import, EntityManagerInterface $manager)
    {
        parent::__construct(null);
        $this->import = $import;
        $this->manager = $manager;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('filename', InputArgument::REQUIRED, 'File name')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $this->helper = $this->getHelper('question');
        $filename = $input->getArgument('filename');

        if (!file_exists($this->import."/$filename")) {
            $io->error(
                sprintf("The file '%s' does not exist in '%s'.", $filename, $this->import)
            );
            return Command::FAILURE;
        }

        $fileSpecification = new FileSpecification();

        $question = new Question("Please enter a name for the new file specification.\n", $filename);
        $fileSpecification->setName($this->helper->ask($input, $output, $question));

        $question = new ConfirmationQuestion("Is this a 'fixed width' formatted file?\n", $fileSpecification->isFixedWidth());
        $fileSpecification->setIsFixedWidth($this->helper->ask($input, $output, $question));

        if (!$fileSpecification->isFixedWidth()) {
            $question = new ChoiceQuestion("How are fields separated?\n", $this->fieldSeparators);
            $question->setAutocompleterValues($this->fieldSeparators);
            $fieldSeparator = $this->helper->ask($input, $output, $question);
            $fileSpecification->setFieldSeparator($fieldSeparator === '\\t' ? "\t" : $fieldSeparator);

            $question = new ChoiceQuestion("How is text enclosed?\n", $this->textSeparators);
            $question->setAutocompleterValues($this->textSeparators);
            $fileSpecification->setTextSeparator($this->helper->ask($input, $output, $question));

            $question = new ConfirmationQuestion("Is the first row of this file a header?\n", $fileSpecification->getHasHeader());
            $fileSpecification->setHasHeader($this->helper->ask($input, $output, $question));
        }

        $file = fopen($this->import."/$filename", 'r');
        $header = [];
        if ($fileSpecification->getHasHeader()) {
            $header = fgetcsv(
                $file,
                0,
                $fileSpecification->getFieldSeparator(),
                $fileSpecification->getTextSeparator()
            );
        }
        fclose($file);

        foreach ($header as $item) {
            $column = new TextColumn();
            $column
                ->setName($item)
            ;
            $fileSpecification->addColumn($column);
        }

        $this->dumpTable($output, $fileSpecification);
        
        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return Command::SUCCESS;
    }

    private function dumpTable(OutputInterface $output, FileSpecification $fileSpecification)
    {
        $table = new Table($output);
        $table->setHeaders(['Pos', 'Name', 'Type']);
        $rows = [];
        foreach ($fileSpecification->getColumns() as $key => $column) {
            $class = get_class($column);
            $rows[] = [$key, $column->getName(), substr($class, 1 + strrpos($class, '\\'))];
        }
        $table->setRows($rows);
        $table->render();
    }
}
