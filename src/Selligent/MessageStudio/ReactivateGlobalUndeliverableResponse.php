<?php

namespace Selligent\MessageStudio;

class ReactivateGlobalUndeliverableResponse extends Response
{

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @var string $summary
     */
    protected $summary = null;

    /**
     * @param boolean $success
     * @param string $summary
     */
    public function __construct($success, $summary)
    {
      $this->success = $success;
      $this->summary = $summary;
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
     * @return \Selligent\MessageStudio\ReactivateGlobalUndeliverableResponse
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
      return $this->summary;
    }

    /**
     * @param string $summary
     * @return \Selligent\MessageStudio\ReactivateGlobalUndeliverableResponse
     */
    public function setSummary($summary)
    {
      $this->summary = $summary;
      return $this;
    }

}
