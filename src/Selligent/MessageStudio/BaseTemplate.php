<?php

namespace Selligent\MessageStudio;

class BaseTemplate extends BaseObject
{

    /**
     * @var AttachmentId[] $attachmentId
     */
    protected $attachmentId = null;

    /**
     * @var \DateTime $createdTime
     */
    protected $createdTime = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var Encoding $bodyEncoding
     */
    protected $bodyEncoding = null;

    /**
     * @var CampaignId $campaignId
     */
    protected $campaignId = null;

    /**
     * @var ContentBlockId[] $contentBlockId
     */
    protected $contentBlockId = null;

    /**
     * @var Encoding $headerEncoding
     */
    protected $headerEncoding = null;

    /**
     * @var boolean $isApproved
     */
    protected $isApproved = null;

    /**
     * @var MessagePart[] $messagePart
     */
    protected $messagePart = null;

    /**
     * @var AssetExpiryInterval $assetExpiryInterval
     */
    protected $assetExpiryInterval = null;

    /**
     * @var CharSet $outputBodyCharSet
     */
    protected $outputBodyCharSet = null;

    /**
     * @var string $outputBodyCharSetToken
     */
    protected $outputBodyCharSetToken = null;

    /**
     * @var CharSet $outputHeaderCharSet
     */
    protected $outputHeaderCharSet = null;

    /**
     * @var string $outputHeaderCharSetToken
     */
    protected $outputHeaderCharSetToken = null;

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
     * @var TrackingTagFormat $linkTracking
     */
    protected $linkTracking = null;

    /**
     * @var TargetId $targetId
     */
    protected $targetId = null;

    /**
     * @var DataSourceId $dataSourceId
     */
    protected $dataSourceId = null;

    /**
     * @var CatalogField[] $catalogField
     */
    protected $catalogField = null;

    /**
     * @param Encoding $bodyEncoding
     * @param Encoding $headerEncoding
     * @param boolean $isApproved
     * @param MessagePart[] $messagePart
     * @param CharSet $outputBodyCharSet
     * @param string $outputBodyCharSetToken
     * @param CharSet $outputHeaderCharSet
     * @param string $outputHeaderCharSetToken
     * @param string $name
     * @param TargetId $targetId
     * @param DataSourceId $dataSourceId
     */
    public function __construct($bodyEncoding, $headerEncoding, $isApproved, array $messagePart, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $name, $targetId, $dataSourceId)
    {
      parent::__construct();
      $this->bodyEncoding = $bodyEncoding;
      $this->headerEncoding = $headerEncoding;
      $this->isApproved = $isApproved;
      $this->messagePart = $messagePart;
      $this->outputBodyCharSet = $outputBodyCharSet;
      $this->outputBodyCharSetToken = $outputBodyCharSetToken;
      $this->outputHeaderCharSet = $outputHeaderCharSet;
      $this->outputHeaderCharSetToken = $outputHeaderCharSetToken;
      $this->name = $name;
      $this->targetId = $targetId;
      $this->dataSourceId = $dataSourceId;
    }

    /**
     * @return AttachmentId[]
     */
    public function getAttachmentId()
    {
      return $this->attachmentId;
    }

    /**
     * @param AttachmentId[] $attachmentId
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setAttachmentId(array $attachmentId = null)
    {
      $this->attachmentId = $attachmentId;
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
     * @return \Selligent\MessageStudio\BaseTemplate
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
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return Encoding
     */
    public function getBodyEncoding()
    {
      return $this->bodyEncoding;
    }

    /**
     * @param Encoding $bodyEncoding
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setBodyEncoding($bodyEncoding)
    {
      $this->bodyEncoding = $bodyEncoding;
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
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return ContentBlockId[]
     */
    public function getContentBlockId()
    {
      return $this->contentBlockId;
    }

    /**
     * @param ContentBlockId[] $contentBlockId
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setContentBlockId(array $contentBlockId = null)
    {
      $this->contentBlockId = $contentBlockId;
      return $this;
    }

    /**
     * @return Encoding
     */
    public function getHeaderEncoding()
    {
      return $this->headerEncoding;
    }

    /**
     * @param Encoding $headerEncoding
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setHeaderEncoding($headerEncoding)
    {
      $this->headerEncoding = $headerEncoding;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsApproved()
    {
      return $this->isApproved;
    }

    /**
     * @param boolean $isApproved
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setIsApproved($isApproved)
    {
      $this->isApproved = $isApproved;
      return $this;
    }

    /**
     * @return MessagePart[]
     */
    public function getMessagePart()
    {
      return $this->messagePart;
    }

    /**
     * @param MessagePart[] $messagePart
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setMessagePart(array $messagePart)
    {
      $this->messagePart = $messagePart;
      return $this;
    }

    /**
     * @return AssetExpiryInterval
     */
    public function getAssetExpiryInterval()
    {
      return $this->assetExpiryInterval;
    }

    /**
     * @param AssetExpiryInterval $assetExpiryInterval
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setAssetExpiryInterval($assetExpiryInterval)
    {
      $this->assetExpiryInterval = $assetExpiryInterval;
      return $this;
    }

    /**
     * @return CharSet
     */
    public function getOutputBodyCharSet()
    {
      return $this->outputBodyCharSet;
    }

    /**
     * @param CharSet $outputBodyCharSet
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setOutputBodyCharSet($outputBodyCharSet)
    {
      $this->outputBodyCharSet = $outputBodyCharSet;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutputBodyCharSetToken()
    {
      return $this->outputBodyCharSetToken;
    }

    /**
     * @param string $outputBodyCharSetToken
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setOutputBodyCharSetToken($outputBodyCharSetToken)
    {
      $this->outputBodyCharSetToken = $outputBodyCharSetToken;
      return $this;
    }

    /**
     * @return CharSet
     */
    public function getOutputHeaderCharSet()
    {
      return $this->outputHeaderCharSet;
    }

    /**
     * @param CharSet $outputHeaderCharSet
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setOutputHeaderCharSet($outputHeaderCharSet)
    {
      $this->outputHeaderCharSet = $outputHeaderCharSet;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutputHeaderCharSetToken()
    {
      return $this->outputHeaderCharSetToken;
    }

    /**
     * @param string $outputHeaderCharSetToken
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setOutputHeaderCharSetToken($outputHeaderCharSetToken)
    {
      $this->outputHeaderCharSetToken = $outputHeaderCharSetToken;
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
     * @return \Selligent\MessageStudio\BaseTemplate
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
     * @return \Selligent\MessageStudio\BaseTemplate
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
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

    /**
     * @return TrackingTagFormat
     */
    public function getLinkTracking()
    {
      return $this->linkTracking;
    }

    /**
     * @param TrackingTagFormat $linkTracking
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setLinkTracking($linkTracking)
    {
      $this->linkTracking = $linkTracking;
      return $this;
    }

    /**
     * @return TargetId
     */
    public function getTargetId()
    {
      return $this->targetId;
    }

    /**
     * @param TargetId $targetId
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setTargetId($targetId)
    {
      $this->targetId = $targetId;
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
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setDataSourceId($dataSourceId)
    {
      $this->dataSourceId = $dataSourceId;
      return $this;
    }

    /**
     * @return CatalogField[]
     */
    public function getCatalogField()
    {
      return $this->catalogField;
    }

    /**
     * @param CatalogField[] $catalogField
     * @return \Selligent\MessageStudio\BaseTemplate
     */
    public function setCatalogField(array $catalogField = null)
    {
      $this->catalogField = $catalogField;
      return $this;
    }

}
