<?php

namespace Selligent\MessageStudio;

class GetTxnMailingHandleRequest
{

    /**
     * @var BaseTransactionalMailingId $mailingId
     */
    protected $mailingId = null;

    /**
     * @var string $mailingName
     */
    protected $mailingName = null;

    /**
     * @param BaseTransactionalMailingId $mailingId
     * @param string $mailingName
     */
    public function __construct($mailingId, $mailingName)
    {
      $this->mailingId = $mailingId;
      $this->mailingName = $mailingName;
    }

    /**
     * @return BaseTransactionalMailingId
     */
    public function getMailingId()
    {
      return $this->mailingId;
    }

    /**
     * @param BaseTransactionalMailingId $mailingId
     * @return \Selligent\MessageStudio\GetTxnMailingHandleRequest
     */
    public function setMailingId($mailingId)
    {
      $this->mailingId = $mailingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailingName()
    {
      return $this->mailingName;
    }

    /**
     * @param string $mailingName
     * @return \Selligent\MessageStudio\GetTxnMailingHandleRequest
     */
    public function setMailingName($mailingName)
    {
      $this->mailingName = $mailingName;
      return $this;
    }

}
