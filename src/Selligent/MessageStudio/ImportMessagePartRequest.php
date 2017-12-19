<?php

namespace Selligent\MessageStudio;

class ImportMessagePartRequest
{

    /**
     * @var BaseTemplateId $templateId
     */
    protected $templateId = null;

    /**
     * @var MediaServerId $mediaServerId
     */
    protected $mediaServerId = null;

    /**
     * @var boolean $isXsl
     */
    protected $isXsl = null;

    /**
     * @var string $folderName
     */
    protected $folderName = null;

    /**
     * @var base64Binary $zipFile
     */
    protected $zipFile = null;

    /**
     * @param BaseTemplateId $templateId
     * @param MediaServerId $mediaServerId
     * @param boolean $isXsl
     * @param base64Binary $zipFile
     */
    public function __construct($templateId, $mediaServerId, $isXsl, $zipFile)
    {
      $this->templateId = $templateId;
      $this->mediaServerId = $mediaServerId;
      $this->isXsl = $isXsl;
      $this->zipFile = $zipFile;
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
     * @return \Selligent\MessageStudio\ImportMessagePartRequest
     */
    public function setTemplateId($templateId)
    {
      $this->templateId = $templateId;
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
     * @return \Selligent\MessageStudio\ImportMessagePartRequest
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
     * @return \Selligent\MessageStudio\ImportMessagePartRequest
     */
    public function setIsXsl($isXsl)
    {
      $this->isXsl = $isXsl;
      return $this;
    }

    /**
     * @return string
     */
    public function getFolderName()
    {
      return $this->folderName;
    }

    /**
     * @param string $folderName
     * @return \Selligent\MessageStudio\ImportMessagePartRequest
     */
    public function setFolderName($folderName)
    {
      $this->folderName = $folderName;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getZipFile()
    {
      return $this->zipFile;
    }

    /**
     * @param base64Binary $zipFile
     * @return \Selligent\MessageStudio\ImportMessagePartRequest
     */
    public function setZipFile($zipFile)
    {
      $this->zipFile = $zipFile;
      return $this;
    }

}
