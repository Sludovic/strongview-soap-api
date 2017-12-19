<?php

namespace Selligent\MessageStudio;

class ChannelTransactionalMailing extends BaseTransactionalMailing
{

    /**
     * @var ChannelId $channelId
     */
    protected $channelId = null;

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
     * @param ChannelId $channelId
     */
    public function __construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate, $channelId)
    {
      parent::__construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate);
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
     * @return \Selligent\MessageStudio\ChannelTransactionalMailing
     */
    public function setChannelId($channelId)
    {
      $this->channelId = $channelId;
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
     * @return \Selligent\MessageStudio\ChannelTransactionalMailing
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
     * @return \Selligent\MessageStudio\ChannelTransactionalMailing
     */
    public function setChannelProfileAttribute(array $channelProfileAttribute = null)
    {
      $this->channelProfileAttribute = $channelProfileAttribute;
      return $this;
    }

}
