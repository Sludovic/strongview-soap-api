<?php

namespace Selligent\MessageStudio;

abstract class RecurringImport extends BaseObject
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var InternalDataSourceId $importTo
     */
    protected $importTo = null;

    /**
     * @var RecurringImportResult[] $importResult
     */
    protected $importResult = null;

    /**
     * @param string $name
     * @param InternalDataSourceId $importTo
     */
    public function __construct($name, $importTo)
    {
      parent::__construct();
      $this->name = $name;
      $this->importTo = $importTo;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Selligent\MessageStudio\RecurringImport
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return InternalDataSourceId
     */
    public function getImportTo()
    {
      return $this->importTo;
    }

    /**
     * @param InternalDataSourceId $importTo
     * @return \Selligent\MessageStudio\RecurringImport
     */
    public function setImportTo($importTo)
    {
      $this->importTo = $importTo;
      return $this;
    }

    /**
     * @return RecurringImportResult[]
     */
    public function getImportResult()
    {
      return $this->importResult;
    }

    /**
     * @param RecurringImportResult[] $importResult
     * @return \Selligent\MessageStudio\RecurringImport
     */
    public function setImportResult(array $importResult = null)
    {
      $this->importResult = $importResult;
      return $this;
    }

}
