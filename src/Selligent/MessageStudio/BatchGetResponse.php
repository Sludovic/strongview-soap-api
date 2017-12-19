<?php

namespace Selligent\MessageStudio;

class BatchGetResponse extends BatchResponse
{

    /**
     * @var GetResponse[] $getResponse
     */
    protected $getResponse = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return GetResponse[]
     */
    public function getGetResponse()
    {
      return $this->getResponse;
    }

    /**
     * @param GetResponse[] $getResponse
     * @return \Selligent\MessageStudio\BatchGetResponse
     */
    public function setGetResponse(array $getResponse = null)
    {
      $this->getResponse = $getResponse;
      return $this;
    }

}
