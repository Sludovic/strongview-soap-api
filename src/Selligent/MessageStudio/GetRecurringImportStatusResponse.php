<?php

namespace Selligent\MessageStudio;

class GetRecurringImportStatusResponse extends Response
{

    /**
     * @var RecurringImportResult[] $importResult
     */
    protected $importResult = null;

    
    public function __construct()
    {
    
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
     * @return \Selligent\MessageStudio\GetRecurringImportStatusResponse
     */
    public function setImportResult(array $importResult = null)
    {
      $this->importResult = $importResult;
      return $this;
    }

}
