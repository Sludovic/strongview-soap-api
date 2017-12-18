<?php

namespace Selligent\MessageStudio;

class Target extends BaseObject
{

    /**
     * @var string $advancedQuery
     */
    protected $advancedQuery = null;

    /**
     * @var string $bounceFieldName
     */
    protected $bounceFieldName = null;

    /**
     * @var CampaignId $campaignId
     */
    protected $campaignId = null;

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var string $emailAddressFieldName
     */
    protected $emailAddressFieldName = null;

    /**
     * @var boolean $excludeBounce
     */
    protected $excludeBounce = null;

    /**
     * @var boolean $excludeUnsubscribe
     */
    protected $excludeUnsubscribe = null;

    /**
     * @var string $smsAddressFieldName
     */
    protected $smsAddressFieldName = null;

    /**
     * @var int $totalRecords
     */
    protected $totalRecords = null;

    /**
     * @var TargetType $type
     */
    protected $type = null;

    /**
     * @var DataSourceId $retargetingDataSourceId
     */
    protected $retargetingDataSourceId = null;

    /**
     * @var string $unsubscribeFieldName
     */
    protected $unsubscribeFieldName = null;

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
     * @param DataSourceId $dataSourceId
     * @param boolean $excludeBounce
     * @param boolean $excludeUnsubscribe
     * @param TargetType $type
     * @param string $name
     */
    public function __construct($dataSourceId, $excludeBounce, $excludeUnsubscribe, $type, $name)
    {
      parent::__construct();
      $this->dataSourceId = $dataSourceId;
      $this->excludeBounce = $excludeBounce;
      $this->excludeUnsubscribe = $excludeUnsubscribe;
      $this->type = $type;
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAdvancedQuery()
    {
      return $this->advancedQuery;
    }

    /**
     * @param string $advancedQuery
     * @return \Selligent\MessageStudio\Target
     */
    public function setAdvancedQuery($advancedQuery)
    {
      $this->advancedQuery = $advancedQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getBounceFieldName()
    {
      return $this->bounceFieldName;
    }

    /**
     * @param string $bounceFieldName
     * @return \Selligent\MessageStudio\Target
     */
    public function setBounceFieldName($bounceFieldName)
    {
      $this->bounceFieldName = $bounceFieldName;
      return $this;
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
     * @return \Selligent\MessageStudio\Target
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return DataSourceId
     */
    public function getDataSourceId()
    {
      return $this->dataSourceId;
    }

    /**
     * @param DataSourceId $dataSourceId
     * @return \Selligent\MessageStudio\Target
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddressFieldName()
    {
      return $this->emailAddressFieldName;
    }

    /**
     * @param string $emailAddressFieldName
     * @return \Selligent\MessageStudio\Target
     */
    public function setEmailAddressFieldName($emailAddressFieldName)
    {
      $this->emailAddressFieldName = $emailAddressFieldName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeBounce()
    {
      return $this->excludeBounce;
    }

    /**
     * @param boolean $excludeBounce
     * @return \Selligent\MessageStudio\Target
     */
    public function setExcludeBounce($excludeBounce)
    {
      $this->excludeBounce = $excludeBounce;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeUnsubscribe()
    {
      return $this->excludeUnsubscribe;
    }

    /**
     * @param boolean $excludeUnsubscribe
     * @return \Selligent\MessageStudio\Target
     */
    public function setExcludeUnsubscribe($excludeUnsubscribe)
    {
      $this->excludeUnsubscribe = $excludeUnsubscribe;
      return $this;
    }

    /**
     * @return string
     */
    public function getSmsAddressFieldName()
    {
      return $this->smsAddressFieldName;
    }

    /**
     * @param string $smsAddressFieldName
     * @return \Selligent\MessageStudio\Target
     */
    public function setSmsAddressFieldName($smsAddressFieldName)
    {
      $this->smsAddressFieldName = $smsAddressFieldName;
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
     * @return \Selligent\MessageStudio\Target
     */
    public function setTotalRecords($totalRecords)
    {
      $this->totalRecords = $totalRecords;
      return $this;
    }

    /**
     * @return TargetType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param TargetType $type
     * @return \Selligent\MessageStudio\Target
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return DataSourceId
     */
    public function getRetargetingDataSourceId()
    {
      return $this->retargetingDataSourceId;
    }

    /**
     * @param DataSourceId $retargetingDataSourceId
     * @return \Selligent\MessageStudio\Target
     */
    public function setRetargetingDataSourceId($retargetingDataSourceId)
    {
      $this->retargetingDataSourceId = $retargetingDataSourceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnsubscribeFieldName()
    {
      return $this->unsubscribeFieldName;
    }

    /**
     * @param string $unsubscribeFieldName
     * @return \Selligent\MessageStudio\Target
     */
    public function setUnsubscribeFieldName($unsubscribeFieldName)
    {
      $this->unsubscribeFieldName = $unsubscribeFieldName;
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
     * @return \Selligent\MessageStudio\Target
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
     * @return \Selligent\MessageStudio\Target
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
     * @return \Selligent\MessageStudio\Target
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
     * @return \Selligent\MessageStudio\Target
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
     * @return \Selligent\MessageStudio\Target
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

}
