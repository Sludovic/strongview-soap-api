<?php

namespace Selligent\MessageStudio;

class UnrecognizedObjectTypeFaultDetail extends FaultDetail
{

    /**
     * @param FaultCode $faultCode
     * @param FaultMessage $faultMessage
     */
    public function __construct($faultCode, $faultMessage)
    {
      parent::__construct($faultCode, $faultMessage);
    }

}
