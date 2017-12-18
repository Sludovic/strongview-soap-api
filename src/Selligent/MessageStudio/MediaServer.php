<?php

namespace Selligent\MessageStudio;

class MediaServer extends BaseObject
{

    /**
     * @var \DateTime $createdTime
     */
    protected $createdTime = null;

    /**
     * @var anyURI $defaultUrl
     */
    protected $defaultUrl = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isWritable
     */
    protected $isWritable = null;

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
     * @var server[] $server
     */
    protected $server = null;

    /**
     * @param boolean $isWritable
     * @param string $name
     */
    public function __construct($isWritable, $name)
    {
      parent::__construct();
      $this->isWritable = $isWritable;
      $this->name = $name;
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
     * @return \Selligent\MessageStudio\MediaServer
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
     * @return anyURI
     */
    public function getDefaultUrl()
    {
      return $this->defaultUrl;
    }

    /**
     * @param anyURI $defaultUrl
     * @return \Selligent\MessageStudio\MediaServer
     */
    public function setDefaultUrl($defaultUrl)
    {
      $this->defaultUrl = $defaultUrl;
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
     * @return \Selligent\MessageStudio\MediaServer
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWritable()
    {
      return $this->isWritable;
    }

    /**
     * @param boolean $isWritable
     * @return \Selligent\MessageStudio\MediaServer
     */
    public function setIsWritable($isWritable)
    {
      $this->isWritable = $isWritable;
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
     * @return \Selligent\MessageStudio\MediaServer
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
     * @return \Selligent\MessageStudio\MediaServer
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
     * @return \Selligent\MessageStudio\MediaServer
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

    /**
     * @return server[]
     */
    public function getServer()
    {
      return $this->server;
    }

    /**
     * @param server[] $server
     * @return \Selligent\MessageStudio\MediaServer
     */
    public function setServer(array $server = null)
    {
      $this->server = $server;
      return $this;
    }

}
