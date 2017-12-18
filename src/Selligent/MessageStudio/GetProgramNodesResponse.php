<?php

namespace Selligent\MessageStudio;

class GetProgramNodesResponse extends Response
{

    /**
     * @var ProgramNode[] $programNodes
     */
    protected $programNodes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProgramNode[]
     */
    public function getProgramNodes()
    {
      return $this->programNodes;
    }

    /**
     * @param ProgramNode[] $programNodes
     * @return \Selligent\MessageStudio\GetProgramNodesResponse
     */
    public function setProgramNodes(array $programNodes = null)
    {
      $this->programNodes = $programNodes;
      return $this;
    }

}
