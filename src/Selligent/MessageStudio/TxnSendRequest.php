<?php

namespace Selligent\MessageStudio;

class TxnSendRequest
{

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @var SendRecord[] $sendRecord
     */
    protected $sendRecord = null;

    /**
     * @param string $handle
     * @param SendRecord[] $sendRecord
     */
    public function __construct($handle, array $sendRecord)
    {
      $this->handle = $handle;
      $this->sendRecord = $sendRecord;
    }

    /**
     * @return string
     */
    public function getHandle()
    {
      return $this->handle;
    }

    /**
     * @param string $handle
     * @return \Selligent\MessageStudio\TxnSendRequest
     */
    public function setHandle($handle)
    {
      $this->handle = $handle;
      return $this;
    }

    /**
     * @return SendRecord[]
     */
    public function getSendRecord()
    {
      return $this->sendRecord;
    }

    /**
     * @param SendRecord[] $sendRecord
     * @return \Selligent\MessageStudio\TxnSendRequest
     */
    public function setSendRecord(array $sendRecord)
    {
      $this->sendRecord = $sendRecord;
      return $this;
    }

}
