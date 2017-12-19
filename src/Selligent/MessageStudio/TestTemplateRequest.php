<?php

namespace Selligent\MessageStudio;

class TestTemplateRequest extends TestRequest
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
     * @param MessageFormat[] $format
     * @param string $subjectPrefix
     * @param string $testColumnName
     * @param boolean $useMultiPart
     * @param BaseTemplateId $templateId
     */
    public function __construct(array $format, $subjectPrefix, $testColumnName, $useMultiPart, $templateId)
    {
      parent::__construct($format, $subjectPrefix, $testColumnName, $useMultiPart);
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
     * @return \Selligent\MessageStudio\TestTemplateRequest
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
     * @return \Selligent\MessageStudio\TestTemplateRequest
     */
    public function setMailingClassId($mailingClassId)
    {
      $this->mailingClassId = $mailingClassId;
      return $this;
    }

}
