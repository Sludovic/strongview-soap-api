<?php

namespace Selligent\MessageStudio;

class LaunchResponse extends Response
{

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @param boolean $success
     */
    public function __construct($success)
    {
      $this->success = $success;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->success;
    }

    /**
     * @param boolean $success
     * @return \Selligent\MessageStudio\LaunchResponse
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}
