<?php

namespace Selligent\MessageStudio;

class AddProgramContactRecordsRequest extends AddRecordsRequest
{

    /**
     * @var ProgramId $programId
     */
    protected $programId = null;

    /**
     * @var ProgramContactRecord[] $programContactRecord
     */
    protected $programContactRecord = null;

    /**
     * @param ProgramId $programId
     * @param ProgramContactRecord[] $programContactRecord
     */
    public function __construct($programId, array $programContactRecord)
    {
      $this->programId = $programId;
      $this->programContactRecord = $programContactRecord;
    }

    /**
     * @return ProgramId
     */
    public function getProgramId()
    {
      return $this->programId;
    }

    /**
     * @param ProgramId $programId
     * @return \Selligent\MessageStudio\AddProgramContactRecordsRequest
     */
    public function setProgramId($programId)
    {
      $this->programId = $programId;
      return $this;
    }

    /**
     * @return ProgramContactRecord[]
     */
    public function getProgramContactRecord()
    {
      return $this->programContactRecord;
    }

    /**
     * @param ProgramContactRecord[] $programContactRecord
     * @return \Selligent\MessageStudio\AddProgramContactRecordsRequest
     */
    public function setProgramContactRecord(array $programContactRecord)
    {
      $this->programContactRecord = $programContactRecord;
      return $this;
    }

}
