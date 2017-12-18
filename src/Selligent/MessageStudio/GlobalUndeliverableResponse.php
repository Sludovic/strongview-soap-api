<?php

namespace Selligent\MessageStudio;

class GlobalUndeliverableResponse
{

    /**
     * @var GlobalUndeliverableInfo[] $globalUndeliverableInfo
     */
    protected $globalUndeliverableInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GlobalUndeliverableInfo[]
     */
    public function getGlobalUndeliverableInfo()
    {
      return $this->globalUndeliverableInfo;
    }

    /**
     * @param GlobalUndeliverableInfo[] $globalUndeliverableInfo
     * @return \Selligent\MessageStudio\GlobalUndeliverableResponse
     */
    public function setGlobalUndeliverableInfo(array $globalUndeliverableInfo = null)
    {
      $this->globalUndeliverableInfo = $globalUndeliverableInfo;
      return $this;
    }

}
