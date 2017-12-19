<?php

namespace Selligent\MessageStudio;

class SuppressionList extends BaseObject
{

    /**
     * @var CampaignId $campaignId
     */
    protected $campaignId = null;

    /**
     * @var boolean $includeByDefaultOnMailings
     */
    protected $includeByDefaultOnMailings = null;

    /**
     * @var int $totalRecords
     */
    protected $totalRecords = null;

    /**
     * @var \DateTime $createdTime
     */
    protected $createdTime = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var UserId $ownerId
     */
    protected $ownerId = null;

    /**
     * @var ChannelId $channelId
     */
    protected $channelId = null;

    /**
     * @param boolean $includeByDefaultOnMailings
     * @param string $name
     */
    public function __construct($includeByDefaultOnMailings, $name)
    {
      parent::__construct();
      $this->includeByDefaultOnMailings = $includeByDefaultOnMailings;
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
     * @return \Selligent\MessageStudio\SuppressionList
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeByDefaultOnMailings()
    {
      return $this->includeByDefaultOnMailings;
    }

    /**
     * @param boolean $includeByDefaultOnMailings
     * @return \Selligent\MessageStudio\SuppressionList
     */
    public function setIncludeByDefaultOnMailings($includeByDefaultOnMailings)
    {
      $this->includeByDefaultOnMailings = $includeByDefaultOnMailings;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecords()
    {
      return $this->totalRecords;
    }

    /**
     * @param int $totalRecords
     * @return \Selligent\MessageStudio\SuppressionList
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
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
     * @return \Selligent\MessageStudio\SuppressionList
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
     * @return \Selligent\MessageStudio\SuppressionList
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Selligent\MessageStudio\SuppressionList
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Selligent\MessageStudio\SuppressionList
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
     * @return \Selligent\MessageStudio\SuppressionList
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

    /**
     * @return ChannelId
     */
    public function getChannelId()
    {
      return $this->channelId;
    }

    /**
     * @param ChannelId $channelId
     * @return \Selligent\MessageStudio\SuppressionList
     */
    public function setChannelId($channelId)
    {
      $this->channelId = $channelId;
      return $this;
    }

}
