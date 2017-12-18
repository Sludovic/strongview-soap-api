<?php

namespace Selligent\MessageStudio;

class TestMailingRequest extends TestRequest
{

    /**
     * @var BaseStandardMailingId $mailingId
     */
    protected $mailingId = null;

    /**
     * @param MessageFormat[] $format
     * @param string $subjectPrefix
     * @param string $testColumnName
     * @param boolean $useMultiPart
     * @param BaseStandardMailingId $mailingId
     */
    public function __construct(array $format, $subjectPrefix, $testColumnName, $useMultiPart, $mailingId)
    {
      parent::__construct($format, $subjectPrefix, $testColumnName, $useMultiPart);
      $this->mailingId = $mailingId;
    }

    /**
     * @return BaseStandardMailingId
     */
    public function getMailingId()
    {
      return $this->mailingId;
    }

    /**
     * @param BaseStandardMailingId $mailingId
     * @return \Selligent\MessageStudio\TestMailingRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

}
