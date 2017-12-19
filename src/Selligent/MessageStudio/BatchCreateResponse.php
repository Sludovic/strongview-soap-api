<?php

namespace Selligent\MessageStudio;

class BatchCreateResponse extends BatchResponse
{

    /**
     * @var CreateResponse[] $createResponse
     */
    protected $createResponse = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return CreateResponse[]
     */
    public function getCreateResponse()
    {
      return $this->createResponse;
    }

    /**
     * @param CreateResponse[] $createResponse
     * @return \Selligent\MessageStudio\BatchCreateResponse
     */
    public function setCreateResponse(array $createResponse = null)
    {
      $this->createResponse = $createResponse;
      return $this;
    }

}
