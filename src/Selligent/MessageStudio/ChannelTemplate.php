<?php

namespace Selligent\MessageStudio;

class ChannelTemplate extends BaseTemplate
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
     * @param ChannelId $channelId
     */
    public function __construct($bodyEncoding, $headerEncoding, $isApproved, array $messagePart, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $name, $targetId, $dataSourceId, $channelId)
    {
      parent::__construct($bodyEncoding, $headerEncoding, $isApproved, $messagePart, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $name, $targetId, $dataSourceId);
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
     * @return \Selligent\MessageStudio\ChannelTemplate
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
     * @return \Selligent\MessageStudio\ChannelTemplate
     */
    public function setChannelHeader(array $channelHeader = null)
    {
      $this->channelHeader = $channelHeader;
      return $this;
    }

}
