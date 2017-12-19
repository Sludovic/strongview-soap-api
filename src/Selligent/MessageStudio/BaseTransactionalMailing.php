<?php

namespace Selligent\MessageStudio;

abstract class BaseTransactionalMailing extends Mailing
{

    /**
     * @var string $recipientFieldName
     */
    protected $recipientFieldName = null;

    /**
     * @var string $mailingConfig
     */
    protected $mailingConfig = null;

    /**
     * @var string[] $recordStructure
     */
    protected $recordStructure = null;

    /**
     * @var TargetId $targetId
     */
    protected $targetId = null;

    /**
     * @var MailingNotification $notificationOption
     */
    protected $notificationOption = null;

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
     */
    public function __construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate)
    {
      parent::__construct($bodyEncoding, $isApproved, $isCompliant, $headerEncoding, $name, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $useHeaderFromTemplate);
    }

    /**
     * @return string
     */
    public function getRecipientFieldName()
    {
      return $this->recipientFieldName;
    }

    /**
     * @param string $recipientFieldName
     * @return \Selligent\MessageStudio\BaseTransactionalMailing
     */
    public function setRecipientFieldName($recipientFieldName)
    {
      $this->recipientFieldName = $recipientFieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailingConfig()
    {
      return $this->mailingConfig;
    }

    /**
     * @param string $mailingConfig
     * @return \Selligent\MessageStudio\BaseTransactionalMailing
     */
    public function setMailingConfig($mailingConfig)
    {
      $this->mailingConfig = $mailingConfig;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRecordStructure()
    {
      return $this->recordStructure;
    }

    /**
     * @param string[] $recordStructure
     * @return \Selligent\MessageStudio\BaseTransactionalMailing
     */
    public function setRecordStructure(array $recordStructure = null)
    {
      $this->recordStructure = $recordStructure;
      return $this;
    }

    /**
     * @return TargetId
     */
    public function getTargetId()
    {
      return $this->targetId;
    }

    /**
     * @param TargetId $targetId
     * @return \Selligent\MessageStudio\BaseTransactionalMailing
     */
    public function setTargetId($targetId)
    {
      $this->targetId = $targetId;
      return $this;
    }

    /**
     * @return MailingNotification
     */
    public function getNotificationOption()
    {
      return $this->notificationOption;
    }

    /**
     * @param MailingNotification $notificationOption
     * @return \Selligent\MessageStudio\BaseTransactionalMailing
     */
    public function setNotificationOption($notificationOption)
    {
      $this->notificationOption = $notificationOption;
      return $this;
    }

}
