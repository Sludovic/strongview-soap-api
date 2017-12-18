<?php

namespace Selligent\MessageStudio;

class PersonalizeTemplateRequest extends PersonalizeRequest
{

    /**
     * @var BaseTemplateId $templateId
     */
    protected $templateId = null;

    /**
     * @var MailingClassId $mailingClassId
     */
    protected $mailingClassId = null;

    /**
     * @param MessageFormat[] $messageFormat
     * @param boolean $useMultiPart
     * @param BaseTemplateId $templateId
     */
    public function __construct(array $messageFormat, $useMultiPart, $templateId)
    {
      parent::__construct($messageFormat, $useMultiPart);
      $this->templateId = $templateId;
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
     * @return \Selligent\MessageStudio\PersonalizeTemplateRequest
     */
    public function setTemplateId($templateId)
    {
      $this->templateId = $templateId;
      return $this;
    }

    /**
     * @return MailingClassId
     */
    public function getMailingClassId()
    {
      return $this->mailingClassId;
    }

    /**
     * @param MailingClassId $mailingClassId
     * @return \Selligent\MessageStudio\PersonalizeTemplateRequest
     */
    public function setMailingClassId($mailingClassId)
    {
      $this->mailingClassId = $mailingClassId;
      return $this;
    }

}
