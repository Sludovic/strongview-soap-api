<?php

namespace Selligent\MessageStudio;

class FetchLinksTemplateRequest extends FetchLinksRequest
{

    /**
     * @var BaseTemplate $template
     */
    protected $template = null;

    /**
     * @var MessageFormat $messageFormat
     */
    protected $messageFormat = null;

    /**
     * @param BaseTemplate $template
     * @param MessageFormat $messageFormat
     */
    public function __construct($template, $messageFormat)
    {
      $this->template = $template;
      $this->messageFormat = $messageFormat;
    }

    /**
     * @return BaseTemplate
     */
    public function getTemplate()
    {
      return $this->template;
    }

    /**
     * @param BaseTemplate $template
     * @return \Selligent\MessageStudio\FetchLinksTemplateRequest
     */
    public function setTemplate($template)
    {
      $this->template = $template;
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
     * @return \Selligent\MessageStudio\FetchLinksTemplateRequest
     */
    public function setMessageFormat($messageFormat)
    {
      $this->messageFormat = $messageFormat;
      return $this;
    }

}
