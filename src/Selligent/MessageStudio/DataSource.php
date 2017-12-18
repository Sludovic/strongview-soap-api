<?php

namespace Selligent\MessageStudio;

abstract class DataSource extends BaseObject
{

    /**
     * @var CampaignId $campaignId
     */
    protected $campaignId = null;

    /**
     * @var \DateTime $createdTime
     */
    protected $createdTime = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var DataSourceField[] $field
     */
    protected $field = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var DataSourceOperationStatus $operationStatus
     */
    protected $operationStatus = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var UserId $ownerId
     */
    protected $ownerId = null;

    /**
     * @var boolean $syncFields
     */
    protected $syncFields = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      parent::__construct();
      $this->name = $name;
    }

    /**
     * @return CampaignId
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param CampaignId $campaignId
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime()
    {
      if ($this->createdTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdTime
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setCreatedTime(\DateTime $createdTime = null)
    {
      if ($createdTime == null) {
       $this->createdTime = null;
      } else {
        $this->createdTime = $createdTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return DataSourceField[]
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param DataSourceField[] $field
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setField(array $field = null)
    {
      $this->field = $field;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return DataSourceOperationStatus
     */
    public function getOperationStatus()
    {
      return $this->operationStatus;
    }

    /**
     * @param DataSourceOperationStatus $operationStatus
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setOperationStatus($operationStatus)
    {
      $this->operationStatus = $operationStatus;
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
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setOrganizationId($organizationId)
    {
      $this->organizationId = $organizationId;
      return $this;
    }

    /**
     * @return UserId
     */
    public function getOwnerId()
    {
      return $this->ownerId;
    }

    /**
     * @param UserId $ownerId
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSyncFields()
    {
      return $this->syncFields;
    }

    /**
     * @param boolean $syncFields
     * @return \Selligent\MessageStudio\DataSource
     */
    public function setSyncFields($syncFields)
    {
      $this->syncFields = $syncFields;
      return $this;
    }

}
