<?php

namespace Selligent\MessageStudio;

class StartRecurringImportRequest
{

    /**
     * @var RecurringImportId $importId
     */
    protected $importId = null;

    /**
     * @var boolean $fullRefresh
     */
    protected $fullRefresh = null;

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
     * @return \Selligent\MessageStudio\StartRecurringImportRequest
     */
    public function setImportId($importId)
    {
      $this->importId = $importId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFullRefresh()
    {
      return $this->fullRefresh;
    }

    /**
     * @param boolean $fullRefresh
     * @return \Selligent\MessageStudio\StartRecurringImportRequest
     */
    public function setFullRefresh($fullRefresh)
    {
      $this->fullRefresh = $fullRefresh;
      return $this;
    }

}
