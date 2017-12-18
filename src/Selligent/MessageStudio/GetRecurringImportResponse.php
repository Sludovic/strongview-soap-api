<?php

namespace Selligent\MessageStudio;

class GetRecurringImportResponse extends Response
{

    /**
     * @var RecurringImport $importDetails
     */
    protected $importDetails = null;

    /**
     * @param RecurringImport $importDetails
     */
    public function __construct($importDetails)
    {
      $this->importDetails = $importDetails;
    }

    /**
     * @return RecurringImport
     */
    public function getImportDetails()
    {
      return $this->importDetails;
    }

    /**
     * @param RecurringImport $importDetails
     * @return \Selligent\MessageStudio\GetRecurringImportResponse
     */
    public function setImportDetails($importDetails)
    {
      $this->importDetails = $importDetails;
      return $this;
    }

}
