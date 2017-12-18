<?php

namespace Selligent\MessageStudio;

class MessagePart
{

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var MessageFormat $format
     */
    protected $format = null;

    /**
     * @var string $mediaServerFolderName
     */
    protected $mediaServerFolderName = null;

    /**
     * @var MediaServerId $mediaServerId
     */
    protected $mediaServerId = null;

    /**
     * @var boolean $isXsl
     */
    protected $isXsl = null;

    /**
     * @var NamedLink[] $namedLinks
     */
    protected $namedLinks = null;

    /**
     * @param string $content
     * @param MessageFormat $format
     * @param boolean $isXsl
     */
    public function __construct($content, $format, $isXsl)
    {
      $this->content = $content;
      $this->format = $format;
      $this->isXsl = $isXsl;
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
     * @return \Selligent\MessageStudio\MessagePart
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return MessageFormat
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param MessageFormat $format
     * @return \Selligent\MessageStudio\MessagePart
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaServerFolderName()
    {
      return $this->mediaServerFolderName;
    }

    /**
     * @param string $mediaServerFolderName
     * @return \Selligent\MessageStudio\MessagePart
     */
    public function setMediaServerFolderName($mediaServerFolderName)
    {
      $this->mediaServerFolderName = $mediaServerFolderName;
      return $this;
    }

    /**
     * @return MediaServerId
     */
    public function getMediaServerId()
    {
      return $this->mediaServerId;
    }

    /**
     * @param MediaServerId $mediaServerId
     * @return \Selligent\MessageStudio\MessagePart
     */
    public function setMediaServerId($mediaServerId)
    {
      $this->mediaServerId = $mediaServerId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsXsl()
    {
      return $this->isXsl;
    }

    /**
     * @param boolean $isXsl
     * @return \Selligent\MessageStudio\MessagePart
     */
    public function setIsXsl($isXsl)
    {
      $this->isXsl = $isXsl;
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
     * @return \Selligent\MessageStudio\MessagePart
     */
    public function setNamedLinks(array $namedLinks = null)
    {
      $this->namedLinks = $namedLinks;
      return $this;
    }

}
