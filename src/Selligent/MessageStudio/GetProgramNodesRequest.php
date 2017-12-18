<?php

namespace Selligent\MessageStudio;

class GetProgramNodesRequest
{

    /**
     * @var ProgramId $programId
     */
    protected $programId = null;

    /**
     * @param ProgramId $programId
     */
    public function __construct($programId)
    {
      $this->programId = $programId;
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
     * @return \Selligent\MessageStudio\GetProgramNodesRequest
     */
    public function setProgramId($programId)
    {
      $this->programId = $programId;
      return $this;
    }

}
