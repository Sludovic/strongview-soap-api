<?php

namespace Selligent\MessageStudio;

class FindRecurringImportResponse extends Response
{

    /**
     * @var RecurringImportId[] $importId
     */
    protected $importId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecurringImportId[]
     */
    public function getImportId()
    {
      return $this->importId;
    }

    /**
     * @param RecurringImportId[] $importId
     * @return \Selligent\MessageStudio\FindRecurringImportResponse
     */
    public function setImportId(array $importId = null)
    {
      $this->importId = $importId;
      return $this;
    }

}
