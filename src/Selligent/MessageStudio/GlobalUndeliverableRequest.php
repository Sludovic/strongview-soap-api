<?php

namespace Selligent\MessageStudio;

class GlobalUndeliverableRequest
{

    /**
     * @var string $recipientAddress
     */
    protected $recipientAddress = null;

    /**
     * @var string $failureCode
     */
    protected $failureCode = null;

    /**
     * @var string $channelType
     */
    protected $channelType = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @var int $recordsPerPage
     */
    protected $recordsPerPage = null;

    /**
     * @param string $recipientAddress
     * @param string $failureCode
     * @param string $channelType
     */
    public function __construct($recipientAddress, $failureCode, $channelType)
    {
      $this->recipientAddress = $recipientAddress;
      $this->failureCode = $failureCode;
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
     * @return \Selligent\MessageStudio\GlobalUndeliverableRequest
     */
    public function setRecipientAddress($recipientAddress)
    {
      $this->recipientAddress = $recipientAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getFailureCode()
    {
      return $this->failureCode;
    }

    /**
     * @param string $failureCode
     * @return \Selligent\MessageStudio\GlobalUndeliverableRequest
     */
    public function setFailureCode($failureCode)
    {
      $this->failureCode = $failureCode;
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
     * @return \Selligent\MessageStudio\GlobalUndeliverableRequest
     */
    public function setChannelType($channelType)
    {
      $this->channelType = $channelType;
      return $this;
    }

    /**
     * @return OrganizationId
     */
    public function getOrganizationId()
    {
      return $this->organizationId;
    }

    /**
     * @param OrganizationId $organizationId
     * @return \Selligent\MessageStudio\GlobalUndeliverableRequest
     */
    public function setOrganizationId($organizationId)
    {
      $this->organizationId = $organizationId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return \Selligent\MessageStudio\GlobalUndeliverableRequest
     */
    public function setPageNumber($pageNumber)
    {
      $this->pageNumber = $pageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecordsPerPage()
    {
      return $this->recordsPerPage;
    }

    /**
     * @param int $recordsPerPage
     * @return \Selligent\MessageStudio\GlobalUndeliverableRequest
     */
    public function setRecordsPerPage($recordsPerPage)
    {
      $this->recordsPerPage = $recordsPerPage;
      return $this;
    }

}
