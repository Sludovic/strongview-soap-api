<?php

namespace Selligent\MessageStudio;

class GlobalUndeliverableInfo
{

    /**
     * @var string $recipientAddress
     */
    protected $recipientAddress = null;

    /**
     * @var string $channelType
     */
    protected $channelType = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \DateTime $lastBounceTime
     */
    protected $lastBounceTime = null;

    /**
     * @var int $failureCode
     */
    protected $failureCode = null;

    /**
     * @param string $recipientAddress
     * @param string $channelType
     */
    public function __construct($recipientAddress, $channelType)
    {
      $this->recipientAddress = $recipientAddress;
      $this->channelType = $channelType;
    }

    /**
     * @return string
     */
    public function getRecipientAddress()
    {
      return $this->recipientAddress;
    }

    /**
     * @param string $recipientAddress
     * @return \Selligent\MessageStudio\GlobalUndeliverableInfo
     */
    public function setRecipientAddress($recipientAddress)
    {
      $this->recipientAddress = $recipientAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getChannelType()
    {
      return $this->channelType;
    }

    /**
     * @param string $channelType
     * @return \Selligent\MessageStudio\GlobalUndeliverableInfo
     */
    public function setChannelType($channelType)
    {
      $this->channelType = $channelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Selligent\MessageStudio\GlobalUndeliverableInfo
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBounceTime()
    {
      if ($this->lastBounceTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastBounceTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastBounceTime
     * @return \Selligent\MessageStudio\GlobalUndeliverableInfo
     */
    public function setLastBounceTime(\DateTime $lastBounceTime = null)
    {
      if ($lastBounceTime == null) {
       $this->lastBounceTime = null;
      } else {
        $this->lastBounceTime = $lastBounceTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getFailureCode()
    {
      return $this->failureCode;
    }

    /**
     * @param int $failureCode
     * @return \Selligent\MessageStudio\GlobalUndeliverableInfo
     */
    public function setFailureCode($failureCode)
    {
      $this->failureCode = $failureCode;
      return $this;
    }

}
