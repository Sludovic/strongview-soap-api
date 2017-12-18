<?php

namespace Selligent\MessageStudio;

class GetAllEasByMailingIdResponse extends Response
{

    /**
     * @var string $hostip
     */
    protected $hostip = null;

    /**
     * @var string $mailingConfigName
     */
    protected $mailingConfigName = null;

    /**
     * @var string $serialNumber
     */
    protected $serialNumber = null;

    /**
     * @var string $easId
     */
    protected $easId = null;

    /**
     * @param string $hostip
     * @param string $mailingConfigName
     */
    public function __construct($hostip, $mailingConfigName)
    {
      $this->hostip = $hostip;
      $this->mailingConfigName = $mailingConfigName;
    }

    /**
     * @return string
     */
    public function getHostip()
    {
      return $this->hostip;
    }

    /**
     * @param string $hostip
     * @return \Selligent\MessageStudio\GetAllEasByMailingIdResponse
     */
    public function setHostip($hostip)
    {
      $this->hostip = $hostip;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailingConfigName()
    {
      return $this->mailingConfigName;
    }

    /**
     * @param string $mailingConfigName
     * @return \Selligent\MessageStudio\GetAllEasByMailingIdResponse
     */
    public function setMailingConfigName($mailingConfigName)
    {
      $this->mailingConfigName = $mailingConfigName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
      return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return \Selligent\MessageStudio\GetAllEasByMailingIdResponse
     */
    public function setSerialNumber($serialNumber)
    {
      $this->serialNumber = $serialNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEasId()
    {
      return $this->easId;
    }

    /**
     * @param string $easId
     * @return \Selligent\MessageStudio\GetAllEasByMailingIdResponse
     */
    public function setEasId($easId)
    {
      $this->easId = $easId;
      return $this;
    }

}
