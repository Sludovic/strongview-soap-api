<?php

namespace Selligent\MessageStudio;

class AddProgramContactRecordsResponse extends AddRecordsResponse
{

    /**
     * @var int $successCount
     */
    protected $successCount = null;

    /**
     * @var ProgramContactRecord[] $failureRecord
     */
    protected $failureRecord = null;

    /**
     * @var ProgramContactRecord[] $duplicateRecord
     */
    protected $duplicateRecord = null;

    /**
     * @param boolean $success
     * @param int $successCount
     */
    public function __construct($success, $successCount)
    {
      parent::__construct($success);
      $this->successCount = $successCount;
    }

    /**
     * @return int
     */
    public function getSuccessCount()
    {
      return $this->successCount;
    }

    /**
     * @param int $successCount
     * @return \Selligent\MessageStudio\AddProgramContactRecordsResponse
     */
    public function setSuccessCount($successCount)
    {
      $this->successCount = $successCount;
      return $this;
    }

    /**
     * @return ProgramContactRecord[]
     */
    public function getFailureRecord()
    {
      return $this->failureRecord;
    }

    /**
     * @param ProgramContactRecord[] $failureRecord
     * @return \Selligent\MessageStudio\AddProgramContactRecordsResponse
     */
    public function setFailureRecord(array $failureRecord = null)
    {
      $this->failureRecord = $failureRecord;
      return $this;
    }

    /**
     * @return ProgramContactRecord[]
     */
    public function getDuplicateRecord()
    {
      return $this->duplicateRecord;
    }

    /**
     * @param ProgramContactRecord[] $duplicateRecord
     * @return \Selligent\MessageStudio\AddProgramContactRecordsResponse
     */
    public function setDuplicateRecord(array $duplicateRecord = null)
    {
      $this->duplicateRecord = $duplicateRecord;
      return $this;
    }

}
