<?php

namespace Selligent\MessageStudio;

class GetTxnEasInfoResponse extends Response
{

    /**
     * @var string $hostname
     */
    protected $hostname = null;

    /**
     * @var string $mailingName
     */
    protected $mailingName = null;

    /**
     * @var string $mailingHandle
     */
    protected $mailingHandle = null;

    /**
     * @param string $hostname
     * @param string $mailingName
     */
    public function __construct($hostname, $mailingName)
    {
      $this->hostname = $hostname;
      $this->mailingName = $mailingName;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
      return $this->hostname;
    }

    /**
     * @param string $hostname
     * @return \Selligent\MessageStudio\GetTxnEasInfoResponse
     */
    public function setHostname($hostname)
    {
      $this->hostname = $hostname;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailingName()
    {
      return $this->mailingName;
    }

    /**
     * @param string $mailingName
     * @return \Selligent\MessageStudio\GetTxnEasInfoResponse
     */
    public function setMailingName($mailingName)
    {
      $this->mailingName = $mailingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailingHandle()
    {
      return $this->mailingHandle;
    }

    /**
     * @param string $mailingHandle
     * @return \Selligent\MessageStudio\GetTxnEasInfoResponse
     */
    public function setMailingHandle($mailingHandle)
    {
      $this->mailingHandle = $mailingHandle;
      return $this;
    }

}
