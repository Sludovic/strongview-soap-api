<?php

namespace Selligent\MessageStudio;

class Rule extends BaseObject
{

    /**
     * @var CampaignId $campaignId
     */
    protected $campaignId = null;

    /**
     * @var TargetId[] $targetId
     */
    protected $targetId = null;

    /**
     * @var RuleIfPart $ifPart
     */
    protected $ifPart = null;

    /**
     * @var RuleThenPart $thenPart
     */
    protected $thenPart = null;

    /**
     * @var RuleElsePart $elsePart
     */
    protected $elsePart = null;

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
     * @param TargetId[] $targetId
     * @param RuleIfPart $ifPart
     * @param RuleThenPart $thenPart
     * @param string $name
     */
    public function __construct(array $targetId, $ifPart, $thenPart, $name)
    {
      parent::__construct();
      $this->targetId = $targetId;
      $this->ifPart = $ifPart;
      $this->thenPart = $thenPart;
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
     * @return \Selligent\MessageStudio\Rule
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return TargetId[]
     */
    public function getTargetId()
    {
      return $this->targetId;
    }

    /**
     * @param TargetId[] $targetId
     * @return \Selligent\MessageStudio\Rule
     */
    public function setTargetId(array $targetId)
    {
      $this->targetId = $targetId;
      return $this;
    }

    /**
     * @return RuleIfPart
     */
    public function getIfPart()
    {
      return $this->ifPart;
    }

    /**
     * @param RuleIfPart $ifPart
     * @return \Selligent\MessageStudio\Rule
     */
    public function setIfPart($ifPart)
    {
      $this->ifPart = $ifPart;
      return $this;
    }

    /**
     * @return RuleThenPart
     */
    public function getThenPart()
    {
      return $this->thenPart;
    }

    /**
     * @param RuleThenPart $thenPart
     * @return \Selligent\MessageStudio\Rule
     */
    public function setThenPart($thenPart)
    {
      $this->thenPart = $thenPart;
      return $this;
    }

    /**
     * @return RuleElsePart
     */
    public function getElsePart()
    {
      return $this->elsePart;
    }

    /**
     * @param RuleElsePart $elsePart
     * @return \Selligent\MessageStudio\Rule
     */
    public function setElsePart($elsePart)
    {
      $this->elsePart = $elsePart;
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
     * @return \Selligent\MessageStudio\Rule
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
     * @return \Selligent\MessageStudio\Rule
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
     * @return \Selligent\MessageStudio\Rule
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
     * @return \Selligent\MessageStudio\Rule
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
     * @return \Selligent\MessageStudio\Rule
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

}
