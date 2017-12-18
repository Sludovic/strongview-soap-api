<?php

namespace Selligent\MessageStudio;

class ImportAttachmentContentRequest extends ImportContentRequest
{

    /**
     * @var AttachmentId $attachmentId
     */
    protected $attachmentId = null;

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @param base64Binary $content
     * @param AttachmentId $attachmentId
     * @param string $fileName
     */
    public function __construct($content, $attachmentId, $fileName)
    {
      parent::__construct($content);
      $this->attachmentId = $attachmentId;
      $this->fileName = $fileName;
    }

    /**
     * @return AttachmentId
     */
    public function getAttachmentId()
    {
      return $this->attachmentId;
    }

    /**
     * @param AttachmentId $attachmentId
     * @return \Selligent\MessageStudio\ImportAttachmentContentRequest
     */
    public function setAttachmentId($attachmentId)
    {
      $this->attachmentId = $attachmentId;
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
     * @return \Selligent\MessageStudio\ImportAttachmentContentRequest
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

}
