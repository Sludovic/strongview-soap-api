<?php

namespace Selligent\MessageStudio;

class AddRecordsResponse extends Response
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
     * @return \Selligent\MessageStudio\AddRecordsResponse
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

}
