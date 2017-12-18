<?php

namespace Selligent\MessageStudio;

class Strongtool extends BaseObject
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var StrongtoolOpenAs $openAs
     */
    protected $openAs = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var UserId $ownerId
     */
    protected $ownerId = null;

    /**
     * @param string $name
     * @param string $url
     * @param StrongtoolOpenAs $openAs
     */
    public function __construct($name, $url, $openAs)
    {
      parent::__construct();
      $this->name = $name;
      $this->url = $url;
      $this->openAs = $openAs;
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
     * @return \Selligent\MessageStudio\Strongtool
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Selligent\MessageStudio\Strongtool
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Selligent\MessageStudio\Strongtool
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return StrongtoolOpenAs
     */
    public function getOpenAs()
    {
      return $this->openAs;
    }

    /**
     * @param StrongtoolOpenAs $openAs
     * @return \Selligent\MessageStudio\Strongtool
     */
    public function setOpenAs($openAs)
    {
      $this->openAs = $openAs;
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
     * @return \Selligent\MessageStudio\Strongtool
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
     * @return \Selligent\MessageStudio\Strongtool
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

}
