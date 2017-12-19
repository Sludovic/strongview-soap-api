<?php

namespace Selligent\MessageStudio;

abstract class BatchResponse
{

    /**
     * @var boolean[] $success
     */
    protected $success = null;

    /**
     * @var FaultDetail[] $fault
     */
    protected $fault = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean[]
     */
    public function getSuccess()
    {
      return $this->success;
    }

    /**
     * @param boolean[] $success
     * @return \Selligent\MessageStudio\BatchResponse
     */
    public function setSuccess(array $success = null)
    {
      $this->success = $success;
      return $this;
    }

    /**
     * @return FaultDetail[]
     */
    public function getFault()
    {
      return $this->fault;
    }

    /**
     * @param FaultDetail[] $fault
     * @return \Selligent\MessageStudio\BatchResponse
     */
    public function setFault(array $fault = null)
    {
      $this->fault = $fault;
      return $this;
    }

}
