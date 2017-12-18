<?php

namespace Selligent\MessageStudio;

abstract class BaseStandardMailing extends SchedulableMailing
{

    /**
     * @var boolean $eliminateDuplicates
     */
    protected $eliminateDuplicates = null;

    /**
     * @var SeedListId[] $seedListId
     */
    protected $seedListId = null;

    /**
     * @var SuppressionListId[] $suppressionListId
     */
    protected $suppressionListId = null;

    /**
     * @var AssetExpiryInterval $assetExpiryInterval
     */
    protected $assetExpiryInterval = null;

    /**
     * @var boolean $addDefaultSuppress
     */
    protected $addDefaultSuppress = null;

    /**
     * @var int $minRecipientLimit
     */
    protected $minRecipientLimit = null;

    /**
     * @var int $maxRecipientLimit
     */
    protected $maxRecipientLimit = null;

    /**
     * @var StandardMailingNotification $notificationOption
     */
    protected $notificationOption = null;

    /**
     * @var int $preTargetingPeriod
     */
    protected $preTargetingPeriod = null;

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
     * @param boolean $eliminateDuplicates
     */
    public function __construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate, $eliminateDuplicates)
    {
      parent::__construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate);
      $this->eliminateDuplicates = $eliminateDuplicates;
    }

    /**
     * @return boolean
     */
    public function getEliminateDuplicates()
    {
      return $this->eliminateDuplicates;
    }

    /**
     * @param boolean $eliminateDuplicates
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setEliminateDuplicates($eliminateDuplicates)
    {
      $this->eliminateDuplicates = $eliminateDuplicates;
      return $this;
    }

    /**
     * @return SeedListId[]
     */
    public function getSeedListId()
    {
      return $this->seedListId;
    }

    /**
     * @param SeedListId[] $seedListId
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setSeedListId(array $seedListId = null)
    {
      $this->seedListId = $seedListId;
      return $this;
    }

    /**
     * @return SuppressionListId[]
     */
    public function getSuppressionListId()
    {
      return $this->suppressionListId;
    }

    /**
     * @param SuppressionListId[] $suppressionListId
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setSuppressionListId(array $suppressionListId = null)
    {
      $this->suppressionListId = $suppressionListId;
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
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setAssetExpiryInterval($assetExpiryInterval)
    {
      $this->assetExpiryInterval = $assetExpiryInterval;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddDefaultSuppress()
    {
      return $this->addDefaultSuppress;
    }

    /**
     * @param boolean $addDefaultSuppress
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setAddDefaultSuppress($addDefaultSuppress)
    {
      $this->addDefaultSuppress = $addDefaultSuppress;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinRecipientLimit()
    {
      return $this->minRecipientLimit;
    }

    /**
     * @param int $minRecipientLimit
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setMinRecipientLimit($minRecipientLimit)
    {
      $this->minRecipientLimit = $minRecipientLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxRecipientLimit()
    {
      return $this->maxRecipientLimit;
    }

    /**
     * @param int $maxRecipientLimit
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setMaxRecipientLimit($maxRecipientLimit)
    {
      $this->maxRecipientLimit = $maxRecipientLimit;
      return $this;
    }

    /**
     * @return StandardMailingNotification
     */
    public function getNotificationOption()
    {
      return $this->notificationOption;
    }

    /**
     * @param StandardMailingNotification $notificationOption
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setNotificationOption($notificationOption)
    {
      $this->notificationOption = $notificationOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getPreTargetingPeriod()
    {
      return $this->preTargetingPeriod;
    }

    /**
     * @param int $preTargetingPeriod
     * @return \Selligent\MessageStudio\BaseStandardMailing
     */
    public function setPreTargetingPeriod($preTargetingPeriod)
    {
      $this->preTargetingPeriod = $preTargetingPeriod;
      return $this;
    }

}
