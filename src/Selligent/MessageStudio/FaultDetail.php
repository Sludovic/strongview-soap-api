<?php

namespace Selligent\MessageStudio;

class FaultDetail
{

    /**
     * @var FaultCode $faultCode
     */
    protected $faultCode = null;

    /**
     * @var FaultMessage $faultMessage
     */
    protected $faultMessage = null;

    /**
     * @param FaultCode $faultCode
     * @param FaultMessage $faultMessage
     */
    public function __construct($faultCode, $faultMessage)
    {
      $this->faultCode = $faultCode;
      $this->faultMessage = $faultMessage;
    }

    /**
     * @return FaultCode
     */
    public function getFaultCode()
    {
      return $this->faultCode;
    }

    /**
     * @param FaultCode $faultCode
     * @return \Selligent\MessageStudio\FaultDetail
     */
    public function setFaultCode($faultCode)
    {
      $this->faultCode = $faultCode;
      return $this;
    }

    /**
     * @return FaultMessage
     */
    public function getFaultMessage()
    {
      return $this->faultMessage;
    }

    /**
     * @param FaultMessage $faultMessage
     * @return \Selligent\MessageStudio\FaultDetail
     */
    public function setFaultMessage($faultMessage)
    {
      $this->faultMessage = $faultMessage;
      return $this;
    }

}
