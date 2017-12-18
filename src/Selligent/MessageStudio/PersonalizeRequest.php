<?php

namespace Selligent\MessageStudio;

class PersonalizeRequest
{

    /**
     * @var MessageFormat[] $messageFormat
     */
    protected $messageFormat = null;

    /**
     * @var boolean $useMultiPart
     */
    protected $useMultiPart = null;

    /**
     * @var NameValuePair[] $personalizationTokens
     */
    protected $personalizationTokens = null;

    /**
     * @param MessageFormat[] $messageFormat
     * @param boolean $useMultiPart
     */
    public function __construct(array $messageFormat, $useMultiPart)
    {
      $this->messageFormat = $messageFormat;
      $this->useMultiPart = $useMultiPart;
    }

    /**
     * @return MessageFormat[]
     */
    public function getMessageFormat()
    {
      return $this->messageFormat;
    }

    /**
     * @param MessageFormat[] $messageFormat
     * @return \Selligent\MessageStudio\PersonalizeRequest
     */
    public function setMessageFormat(array $messageFormat)
    {
      $this->messageFormat = $messageFormat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseMultiPart()
    {
      return $this->useMultiPart;
    }

    /**
     * @param boolean $useMultiPart
     * @return \Selligent\MessageStudio\PersonalizeRequest
     */
    public function setUseMultiPart($useMultiPart)
    {
      $this->useMultiPart = $useMultiPart;
      return $this;
    }

    /**
     * @return NameValuePair[]
     */
    public function getPersonalizationTokens()
    {
      return $this->personalizationTokens;
    }

    /**
     * @param NameValuePair[] $personalizationTokens
     * @return \Selligent\MessageStudio\PersonalizeRequest
     */
    public function setPersonalizationTokens(array $personalizationTokens = null)
    {
      $this->personalizationTokens = $personalizationTokens;
      return $this;
    }

}
