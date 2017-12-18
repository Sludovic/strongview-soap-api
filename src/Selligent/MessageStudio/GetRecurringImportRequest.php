<?php

namespace Selligent\MessageStudio;

class GetRecurringImportRequest
{

    /**
     * @var RecurringImportId $importId
     */
    protected $importId = null;

    /**
     * @param RecurringImportId $importId
     */
    public function __construct($importId)
    {
      $this->importId = $importId;
    }

    /**
     * @return RecurringImportId
     */
    public function getImportId()
    {
      return $this->importId;
    }

    /**
     * @param RecurringImportId $importId
     * @return \Selligent\MessageStudio\GetRecurringImportRequest
     */
    public function setImportId($importId)
    {
      $this->importId = $importId;
      return $this;
    }

}
