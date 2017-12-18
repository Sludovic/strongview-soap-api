<?php

namespace Selligent\MessageStudio;

class Channel extends BaseObject
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
     * @var string[] $contentType
     */
    protected $contentType = null;

    /**
     * @var ChannelHeader[] $channelHeader
     */
    protected $channelHeader = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param string $name
     * @param string $status
     */
    public function __construct($name, $status)
    {
      parent::__construct();
      $this->name = $name;
      $this->status = $status;
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
     * @return \Selligent\MessageStudio\Channel
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
     * @return \Selligent\MessageStudio\Channel
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param string[] $contentType
     * @return \Selligent\MessageStudio\Channel
     */
    public function setContentType(array $contentType = null)
    {
      $this->contentType = $contentType;
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
     * @return \Selligent\MessageStudio\Channel
     */
    public function setChannelHeader(array $channelHeader = null)
    {
      $this->channelHeader = $channelHeader;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Selligent\MessageStudio\Channel
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
