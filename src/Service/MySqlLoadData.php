<?php

namespace App\Service;

class MySqlLoadData
{
    public const LOAD_DATA_REPLACE = 'REPLACE';
    public const LOAD_DATA_IGNORE = 'IGNORE';
    protected ?string $fileName = null;
    protected ?string $replaceOrIgnore = null;
    protected ?string $schemaName = null;
    protected ?string $tableName = null;
    protected string $fieldsTerminatedBy = '\t';
    protected string $fieldsEnclosedBy = '';
    protected bool $fieldsEnclosedByOptional = false;
    protected string $fieldsEscapedBy = '\\';
    protected string $linesStartingBy = '';
    protected string $linesTerminatedBy = '\n';
    protected int $ignoreLines = 0;
    protected array $fields = [];

    public function getQuery(): string
    {
        $query = sprintf("LOAD DATA LOCAL INFILE '%s'\n",
            $this->getFileName()
        );
        $query .= $this->getReplaceOrIgnore() ? $this->getReplaceOrIgnore()."\n": null;
        $query .= sprintf("INTO TABLE `%s`.`%s`\n",
            $this->getSchemaName(),
            $this->getTableName()
        );
        $optional = $this->isFieldsEnclosedByOptional() ? 'OPTIONALLY' : null;
        $query .= sprintf("FIELDS TERMINATED BY '%s' %s ENCLOSED BY '%s' ESCAPED BY '%s'\n",
            $this->getFieldsTerminatedBy(),
            $optional,
            $this->getFieldsEnclosedBy(),
            $this->getFieldsEscapedBy()
        );
        $query .= sprintf("LINES STARTING BY '%s' TERMINATED BY '%s'\n",
            $this->getLinesStartingBy(),
            $this->getLinesTerminatedBy()
        );
        $query .= sprintf("IGNORE %i LINES\n", $this->getIgnoreLines());
        $fields = array_map(static function ($v) {
            return sprintf("`%s`", $v);
        }, $this->fields);
        $query .= sprintf("(%s)", implode(", ", $fields));

        return $query;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string|null $fileName
     * @return MySqlLoadData
     */
    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReplaceOrIgnore(): ?string
    {
        return $this->replaceOrIgnore;
    }

    /**
     * @param string|null $replaceOrIgnore
     * @return MySqlLoadData
     */
    public function setReplaceOrIgnore(?string $replaceOrIgnore): self
    {
        $this->replaceOrIgnore = $replaceOrIgnore;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSchemaName(): ?string
    {
        return $this->schemaName;
    }

    /**
     * @param string|null $schemaName
     * @return MySqlLoadData
     */
    public function setSchemaName(?string $schemaName): self
    {
        $this->schemaName = $schemaName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    /**
     * @param string|null $tableName
     * @return MySqlLoadData
     */
    public function setTableName(?string $tableName): self
    {
        $this->tableName = $tableName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldsTerminatedBy(): string
    {
        return $this->fieldsTerminatedBy;
    }

    /**
     * @param string $fieldsTerminatedBy
     * @return MySqlLoadData
     */
    public function setFieldsTerminatedBy(string $fieldsTerminatedBy): self
    {
        $this->fieldsTerminatedBy = $fieldsTerminatedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldsEnclosedBy(): string
    {
        return $this->fieldsEnclosedBy;
    }

    /**
     * @param string $fieldsEnclosedBy
     * @return MySqlLoadData
     */
    public function setFieldsEnclosedBy(string $fieldsEnclosedBy): self
    {
        $this->fieldsEnclosedBy = $fieldsEnclosedBy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFieldsEnclosedByOptional(): bool
    {
        return $this->fieldsEnclosedByOptional;
    }

    /**
     * @param bool $fieldsEnclosedByOptional
     * @return MySqlLoadData
     */
    public function setFieldsEnclosedByOptional(bool $fieldsEnclosedByOptional): self
    {
        $this->fieldsEnclosedByOptional = $fieldsEnclosedByOptional;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldsEscapedBy(): string
    {
        return $this->fieldsEscapedBy;
    }

    /**
     * @param string $fieldsEscapedBy
     * @return MySqlLoadData
     */
    public function setFieldsEscapedBy(string $fieldsEscapedBy): self
    {
        $this->fieldsEscapedBy = $fieldsEscapedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinesStartingBy(): string
    {
        return $this->linesStartingBy;
    }

    /**
     * @param string $linesStartingBy
     * @return MySqlLoadData
     */
    public function setLinesStartingBy(string $linesStartingBy): self
    {
        $this->linesStartingBy = $linesStartingBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinesTerminatedBy(): string
    {
        return $this->linesTerminatedBy;
    }

    /**
     * @param string $linesTerminatedBy
     * @return MySqlLoadData
     */
    public function setLinesTerminatedBy(string $linesTerminatedBy): self
    {
        $this->linesTerminatedBy = $linesTerminatedBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getIgnoreLines(): int
    {
        return $this->ignoreLines;
    }

    /**
     * @param int $ignoreLines
     * @return MySqlLoadData
     */
    public function setIgnoreLines(int $ignoreLines): self
    {
        $this->ignoreLines = $ignoreLines;
        return $this;
    }

    /**
     * @return array
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     * @return MySqlLoadData
     */
    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }
}