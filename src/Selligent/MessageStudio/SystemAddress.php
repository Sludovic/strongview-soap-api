<?php

namespace Selligent\MessageStudio;

class SystemAddress extends BaseObject
{

    /**
     * @var \DateTime $createdTime
     */
    protected $createdTime = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @var boolean $isBounce
     */
    protected $isBounce = null;

    /**
     * @var string $fromName
     */
    protected $fromName = null;

    /**
     * @var boolean $isFrom
     */
    protected $isFrom = null;

    /**
     * @var boolean $isReply
     */
    protected $isReply = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var UserId $ownerId
     */
    protected $ownerId = null;

    /**
     * @param string $emailAddress
     * @param boolean $isBounce
     * @param boolean $isFrom
     * @param boolean $isReply
     */
    public function __construct($emailAddress, $isBounce, $isFrom, $isReply)
    {
      parent::__construct();
      $this->emailAddress = $emailAddress;
      $this->isBounce = $isBounce;
      $this->isFrom = $isFrom;
      $this->isReply = $isReply;
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
     * @return \Selligent\MessageStudio\SystemAddress
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
     * @return \Selligent\MessageStudio\SystemAddress
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return \Selligent\MessageStudio\SystemAddress
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBounce()
    {
      return $this->isBounce;
    }

    /**
     * @param boolean $isBounce
     * @return \Selligent\MessageStudio\SystemAddress
     */
    public function setIsBounce($isBounce)
    {
      $this->isBounce = $isBounce;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
      return $this->fromName;
    }

    /**
     * @param string $fromName
     * @return \Selligent\MessageStudio\SystemAddress
     */
    public function setFromName($fromName)
    {
      $this->fromName = $fromName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFrom()
    {
      return $this->isFrom;
    }

    /**
     * @param boolean $isFrom
     * @return \Selligent\MessageStudio\SystemAddress
     */
    public function setIsFrom($isFrom)
    {
      $this->isFrom = $isFrom;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsReply()
    {
      return $this->isReply;
    }

    /**
     * @param boolean $isReply
     * @return \Selligent\MessageStudio\SystemAddress
     */
    public function setIsReply($isReply)
    {
      $this->isReply = $isReply;
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
     * @return \Selligent\MessageStudio\SystemAddress
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
     * @return \Selligent\MessageStudio\SystemAddress
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

}
