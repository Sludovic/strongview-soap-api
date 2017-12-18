<?php

namespace Selligent\MessageStudio;

class ContentBlock extends BaseObject
{

    /**
     * @var CampaignId $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $content
     */
    protected $content = null;

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
     * @var int $size
     */
    protected $size = null;

    /**
     * @var NamedLink[] $namedLinks
     */
    protected $namedLinks = null;

    /**
     * @param string $content
     * @param string $name
     */
    public function __construct($content, $name)
    {
      parent::__construct();
      $this->content = $content;
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
     * @return \Selligent\MessageStudio\ContentBlock
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \Selligent\MessageStudio\ContentBlock
     */
    public function setContent($content)
    {
      $this->content = $content;
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
     * @return \Selligent\MessageStudio\ContentBlock
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
     * @return \Selligent\MessageStudio\ContentBlock
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
     * @return \Selligent\MessageStudio\ContentBlock
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
     * @return \Selligent\MessageStudio\ContentBlock
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
     * @return \Selligent\MessageStudio\ContentBlock
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param int $size
     * @return \Selligent\MessageStudio\ContentBlock
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return NamedLink[]
     */
    public function getNamedLinks()
    {
      return $this->namedLinks;
    }

    /**
     * @param NamedLink[] $namedLinks
     * @return \Selligent\MessageStudio\ContentBlock
     */
    public function setNamedLinks(array $namedLinks = null)
    {
      $this->namedLinks = $namedLinks;
      return $this;
    }

}
