<?php

namespace Selligent\MessageStudio;

abstract class Mailing extends BaseObject
{

    /**
     * @var AttachmentId[] $attachmentId
     */
    protected $attachmentId = null;

    /**
     * @var Encoding $bodyEncoding
     */
    protected $bodyEncoding = null;

    /**
     * @var CampaignId $campaignId
     */
    protected $campaignId = null;

    /**
     * @var boolean $isApproved
     */
    protected $isApproved = null;

    /**
     * @var boolean $isCompliant
     */
    protected $isCompliant = null;

    /**
     * @var ContentBlockId[] $contentBlockId
     */
    protected $contentBlockId = null;

    /**
     * @var string $fieldDelimiter
     */
    protected $fieldDelimiter = null;

    /**
     * @var MessageFormat[] $format
     */
    protected $format = null;

    /**
     * @var Encoding $headerEncoding
     */
    protected $headerEncoding = null;

    /**
     * @var MailingStatus $lastGoodStatus
     */
    protected $lastGoodStatus = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var MailingPriority $priority
     */
    protected $priority = null;

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
     * @var MailingId $parentId
     */
    protected $parentId = null;

    /**
     * @var date $plannedLaunchDate
     */
    protected $plannedLaunchDate = null;

    /**
     * @var string $rowDelimiter
     */
    protected $rowDelimiter = null;

    /**
     * @var int $serverErrorCode
     */
    protected $serverErrorCode = null;

    /**
     * @var string $serverErrorMessage
     */
    protected $serverErrorMessage = null;

    /**
     * @var MailingStatus $status
     */
    protected $status = null;

    /**
     * @var BaseTemplateId $templateId
     */
    protected $templateId = null;

    /**
     * @var MailingType $type
     */
    protected $type = null;

    /**
     * @var \DateTime $createdTime
     */
    protected $createdTime = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var OrganizationId $organizationId
     */
    protected $organizationId = null;

    /**
     * @var UserId $ownerId
     */
    protected $ownerId = null;

    /**
     * @var boolean $useHeaderFromTemplate
     */
    protected $useHeaderFromTemplate = null;

    /**
     * @var TagValueId[] $tagValueId
     */
    protected $tagValueId = null;

    /**
     * @var string $linkExpiryInterval
     */
    protected $linkExpiryInterval = null;

    /**
     * @param Encoding $bodyEncoding
     * @param boolean $isApproved
     * @param boolean $isCompliant
     * @param Encoding $headerEncoding
     * @param string $name
     * @param CharSet $outputBodyCharSet
     * @param string $outputBodyCharSetToken
     * @param CharSet $outputHeaderCharSet
     * @param string $outputHeaderCharSetToken
     * @param boolean $useHeaderFromTemplate
     */
    public function __construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate)
    {
      parent::__construct();
      $this->bodyEncoding = $bodyEncoding;
      $this->isApproved = $isApproved;
      $this->isCompliant = $isCompliant;
      $this->headerEncoding = $headerEncoding;
      $this->name = $name;
      $this->outputBodyCharSet = $outputBodyCharSet;
      $this->outputBodyCharSetToken = $outputBodyCharSetToken;
      $this->outputHeaderCharSet = $outputHeaderCharSet;
      $this->outputHeaderCharSetToken = $outputHeaderCharSetToken;
      $this->useHeaderFromTemplate = $useHeaderFromTemplate;
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setAttachmentId(array $attachmentId = null)
    {
      $this->attachmentId = $attachmentId;
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
     * @return \Selligent\MessageStudio\Mailing
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setIsApproved($isApproved)
    {
      $this->isApproved = $isApproved;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCompliant()
    {
      return $this->isCompliant;
    }

    /**
     * @param boolean $isCompliant
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setIsCompliant($isCompliant)
    {
      $this->isCompliant = $isCompliant;
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setContentBlockId(array $contentBlockId = null)
    {
      $this->contentBlockId = $contentBlockId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldDelimiter()
    {
      return $this->fieldDelimiter;
    }

    /**
     * @param string $fieldDelimiter
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setFieldDelimiter($fieldDelimiter)
    {
      $this->fieldDelimiter = $fieldDelimiter;
      return $this;
    }

    /**
     * @return MessageFormat[]
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param MessageFormat[] $format
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setFormat(array $format = null)
    {
      $this->format = $format;
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setHeaderEncoding($headerEncoding)
    {
      $this->headerEncoding = $headerEncoding;
      return $this;
    }

    /**
     * @return MailingStatus
     */
    public function getLastGoodStatus()
    {
      return $this->lastGoodStatus;
    }

    /**
     * @param MailingStatus $lastGoodStatus
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setLastGoodStatus($lastGoodStatus)
    {
      $this->lastGoodStatus = $lastGoodStatus;
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return MailingPriority
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param MailingPriority $priority
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
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
     * @return \Selligent\MessageStudio\Mailing
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
     * @return \Selligent\MessageStudio\Mailing
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
     * @return \Selligent\MessageStudio\Mailing
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setOutputHeaderCharSetToken($outputHeaderCharSetToken)
    {
      $this->outputHeaderCharSetToken = $outputHeaderCharSetToken;
      return $this;
    }

    /**
     * @return MailingId
     */
    public function getParentId()
    {
      return $this->parentId;
    }

    /**
     * @param MailingId $parentId
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setParentId($parentId)
    {
      $this->parentId = $parentId;
      return $this;
    }

    /**
     * @return date
     */
    public function getPlannedLaunchDate()
    {
      return $this->plannedLaunchDate;
    }

    /**
     * @param date $plannedLaunchDate
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setPlannedLaunchDate($plannedLaunchDate)
    {
      $this->plannedLaunchDate = $plannedLaunchDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getRowDelimiter()
    {
      return $this->rowDelimiter;
    }

    /**
     * @param string $rowDelimiter
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setRowDelimiter($rowDelimiter)
    {
      $this->rowDelimiter = $rowDelimiter;
      return $this;
    }

    /**
     * @return int
     */
    public function getServerErrorCode()
    {
      return $this->serverErrorCode;
    }

    /**
     * @param int $serverErrorCode
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setServerErrorCode($serverErrorCode)
    {
      $this->serverErrorCode = $serverErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getServerErrorMessage()
    {
      return $this->serverErrorMessage;
    }

    /**
     * @param string $serverErrorMessage
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setServerErrorMessage($serverErrorMessage)
    {
      $this->serverErrorMessage = $serverErrorMessage;
      return $this;
    }

    /**
     * @return MailingStatus
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param MailingStatus $status
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return BaseTemplateId
     */
    public function getTemplateId()
    {
      return $this->templateId;
    }

    /**
     * @param BaseTemplateId $templateId
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setTemplateId($templateId)
    {
      $this->templateId = $templateId;
      return $this;
    }

    /**
     * @return MailingType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param MailingType $type
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Selligent\MessageStudio\Mailing
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Selligent\MessageStudio\Mailing
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
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setOwnerId($ownerId)
    {
      $this->ownerId = $ownerId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseHeaderFromTemplate()
    {
      return $this->useHeaderFromTemplate;
    }

    /**
     * @param boolean $useHeaderFromTemplate
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setUseHeaderFromTemplate($useHeaderFromTemplate)
    {
      $this->useHeaderFromTemplate = $useHeaderFromTemplate;
      return $this;
    }

    /**
     * @return TagValueId[]
     */
    public function getTagValueId()
    {
      return $this->tagValueId;
    }

    /**
     * @param TagValueId[] $tagValueId
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setTagValueId(array $tagValueId = null)
    {
      $this->tagValueId = $tagValueId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkExpiryInterval()
    {
      return $this->linkExpiryInterval;
    }

    /**
     * @param string $linkExpiryInterval
     * @return \Selligent\MessageStudio\Mailing
     */
    public function setLinkExpiryInterval($linkExpiryInterval)
    {
      $this->linkExpiryInterval = $linkExpiryInterval;
      return $this;
    }

}
