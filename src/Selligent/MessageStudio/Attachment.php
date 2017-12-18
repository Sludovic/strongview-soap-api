<?php

namespace Selligent\MessageStudio;

class Attachment extends BaseObject
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
     * @var base64Binary $content
     */
    protected $content = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var string $fileReference
     */
    protected $fileReference = null;

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
     * @param base64Binary $content
     * @param string $fileName
     * @param string $fileReference
     * @param string $name
     */
    public function __construct($content, $fileName, $fileReference, $name)
    {
      parent::__construct();
      $this->content = $content;
      $this->fileName = $fileName;
      $this->fileReference = $fileReference;
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
     * @return \Selligent\MessageStudio\Attachment
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
     * @return \Selligent\MessageStudio\Attachment
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
     * @return \Selligent\MessageStudio\Attachment
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param base64Binary $content
     * @return \Selligent\MessageStudio\Attachment
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return \Selligent\MessageStudio\Attachment
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileReference()
    {
      return $this->fileReference;
    }

    /**
     * @param string $fileReference
     * @return \Selligent\MessageStudio\Attachment
     */
    public function setFileReference($fileReference)
    {
      $this->fileReference = $fileReference;
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
     * @return \Selligent\MessageStudio\Attachment
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
     * @return \Selligent\MessageStudio\Attachment
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
     * @return \Selligent\MessageStudio\Attachment
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
     * @return \Selligent\MessageStudio\Attachment
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

}
