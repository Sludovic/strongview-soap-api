<?php

namespace Selligent\MessageStudio;

class ValidateXslRequest
{

    /**
     * @var BaseTemplateId $templateId
     */
    protected $templateId = null;

    /**
     * @var MessageFormat $messageFormat
     */
    protected $messageFormat = null;

    /**
     * @param BaseTemplateId $templateId
     * @param MessageFormat $messageFormat
     */
    public function __construct($templateId, $messageFormat)
    {
      $this->templateId = $templateId;
      $this->messageFormat = $messageFormat;
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
     * @return \Selligent\MessageStudio\ValidateXslRequest
     */
    public function setTemplateId($templateId)
    {
      $this->templateId = $templateId;
      return $this;
    }

    /**
     * @return MessageFormat
     */
    public function getMessageFormat()
    {
      return $this->messageFormat;
    }

    /**
     * @param MessageFormat $messageFormat
     * @return \Selligent\MessageStudio\ValidateXslRequest
     */
    public function setMessageFormat($messageFormat)
    {
      $this->messageFormat = $messageFormat;
      return $this;
    }

}
