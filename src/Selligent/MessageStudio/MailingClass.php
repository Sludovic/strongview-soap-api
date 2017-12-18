<?php

namespace Selligent\MessageStudio;

class MailingClass extends BaseObject
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
     * @var string $name
     */
    protected $name = null;

    /**
     * @var OrganizationId[] $organizationId
     */
    protected $organizationId = null;

    /**
     * @var UserId $ownerId
     */
    protected $ownerId = null;

    /**
     * @param string $name
     * @param OrganizationId[] $organizationId
     */
    public function __construct($name, array $organizationId)
    {
      parent::__construct();
      $this->name = $name;
      $this->organizationId = $organizationId;
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
     * @return \Selligent\MessageStudio\MailingClass
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
     * @return \Selligent\MessageStudio\MailingClass
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
     * @return \Selligent\MessageStudio\MailingClass
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return OrganizationId[]
     */
    public function getOrganizationId()
    {
      return $this->organizationId;
    }

    /**
     * @param OrganizationId[] $organizationId
     * @return \Selligent\MessageStudio\MailingClass
     */
    public function setOrganizationId(array $organizationId)
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
     * @return \Selligent\MessageStudio\MailingClass
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

}
