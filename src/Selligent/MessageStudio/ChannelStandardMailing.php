<?php

namespace Selligent\MessageStudio;

class ChannelStandardMailing extends BaseStandardMailing
{

    /**
     * @var ChannelId $channelId
     */
    protected $channelId = null;

    /**
     * @var IncludedTargetField[] $includedTarget
     */
    protected $includedTarget = null;

    /**
     * @var TargetField[] $excludedTarget
     */
    protected $excludedTarget = null;

    /**
     * @var ChannelHeader[] $channelHeader
     */
    protected $channelHeader = null;

    /**
     * @var string[] $channelProfileAttribute
     */
    protected $channelProfileAttribute = null;

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
     * @param ChannelId $channelId
     */
    public function __construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate, $eliminateDuplicates, $channelId)
    {
      parent::__construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate, $eliminateDuplicates);
      $this->channelId = $channelId;
    }

    /**
     * @return ChannelId
     */
    public function getChannelId()
    {
      return $this->channelId;
    }

    /**
     * @param ChannelId $channelId
     * @return \Selligent\MessageStudio\ChannelStandardMailing
     */
    public function setChannelId($channelId)
    {
      $this->channelId = $channelId;
      return $this;
    }

    /**
     * @return IncludedTargetField[]
     */
    public function getIncludedTarget()
    {
      return $this->includedTarget;
    }

    /**
     * @param IncludedTargetField[] $includedTarget
     * @return \Selligent\MessageStudio\ChannelStandardMailing
     */
    public function setIncludedTarget(array $includedTarget = null)
    {
      $this->includedTarget = $includedTarget;
      return $this;
    }

    /**
     * @return TargetField[]
     */
    public function getExcludedTarget()
    {
      return $this->excludedTarget;
    }

    /**
     * @param TargetField[] $excludedTarget
     * @return \Selligent\MessageStudio\ChannelStandardMailing
     */
    public function setExcludedTarget(array $excludedTarget = null)
    {
      $this->excludedTarget = $excludedTarget;
      return $this;
    }

    /**
     * @return ChannelHeader[]
     */
    public function getChannelHeader()
    {
      return $this->channelHeader;
    }

    /**
     * @param ChannelHeader[] $channelHeader
     * @return \Selligent\MessageStudio\ChannelStandardMailing
     */
    public function setChannelHeader(array $channelHeader = null)
    {
      $this->channelHeader = $channelHeader;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getChannelProfileAttribute()
    {
      return $this->channelProfileAttribute;
    }

    /**
     * @param string[] $channelProfileAttribute
     * @return \Selligent\MessageStudio\ChannelStandardMailing
     */
    public function setChannelProfileAttribute(array $channelProfileAttribute = null)
    {
      $this->channelProfileAttribute = $channelProfileAttribute;
      return $this;
    }

}
