<?php

namespace Selligent\MessageStudio;

class TestRequest
{

    /**
     * @var string[] $address
     */
    protected $address = null;

    /**
     * @var MessageFormat[] $format
     */
    protected $format = null;

    /**
     * @var string $subjectPrefix
     */
    protected $subjectPrefix = null;

    /**
     * @var string $testColumnName
     */
    protected $testColumnName = null;

    /**
     * @var SeedListId $testListId
     */
    protected $testListId = null;

    /**
     * @var NameValuePair[] $tokenValue
     */
    protected $tokenValue = null;

    /**
     * @var boolean $useMultiPart
     */
    protected $useMultiPart = null;

    /**
     * @param MessageFormat[] $format
     * @param string $subjectPrefix
     * @param string $testColumnName
     * @param boolean $useMultiPart
     */
    public function __construct(array $format, $subjectPrefix, $testColumnName, $useMultiPart)
    {
      $this->format = $format;
      $this->subjectPrefix = $subjectPrefix;
      $this->testColumnName = $testColumnName;
      $this->useMultiPart = $useMultiPart;
    }

    /**
     * @return string[]
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string[] $address
     * @return \Selligent\MessageStudio\TestRequest
     */
    public function setAddress(array $address = null)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return MessageFormat[]
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param MessageFormat[] $format
     * @return \Selligent\MessageStudio\TestRequest
     */
    public function setFormat(array $format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubjectPrefix()
    {
      return $this->subjectPrefix;
    }

    /**
     * @param string $subjectPrefix
     * @return \Selligent\MessageStudio\TestRequest
     */
    public function setSubjectPrefix($subjectPrefix)
    {
      $this->subjectPrefix = $subjectPrefix;
      return $this;
    }

    /**
     * @return string
     */
    public function getTestColumnName()
    {
      return $this->testColumnName;
    }

    /**
     * @param string $testColumnName
     * @return \Selligent\MessageStudio\TestRequest
     */
    public function setTestColumnName($testColumnName)
    {
      $this->testColumnName = $testColumnName;
      return $this;
    }

    /**
     * @return SeedListId
     */
    public function getTestListId()
    {
      return $this->testListId;
    }

    /**
     * @param SeedListId $testListId
     * @return \Selligent\MessageStudio\TestRequest
     */
    public function setTestListId($testListId)
    {
      $this->testListId = $testListId;
      return $this;
    }

    /**
     * @return NameValuePair[]
     */
    public function getTokenValue()
    {
      return $this->tokenValue;
    }

    /**
     * @param NameValuePair[] $tokenValue
     * @return \Selligent\MessageStudio\TestRequest
     */
    public function setTokenValue(array $tokenValue = null)
    {
      $this->tokenValue = $tokenValue;
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
     * @return \Selligent\MessageStudio\TestRequest
     */
    public function setUseMultiPart($useMultiPart)
    {
      $this->useMultiPart = $useMultiPart;
      return $this;
    }

}
