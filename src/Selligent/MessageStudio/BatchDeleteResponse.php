<?php

namespace Selligent\MessageStudio;

class BatchDeleteResponse extends BatchResponse
{

    /**
     * @var DeleteResponse[] $deleteResponse
     */
    protected $deleteResponse = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DeleteResponse[]
     */
    public function getDeleteResponse()
    {
      return $this->deleteResponse;
    }

    /**
     * @param DeleteResponse[] $deleteResponse
     * @return \Selligent\MessageStudio\BatchDeleteResponse
     */
    public function setDeleteResponse(array $deleteResponse = null)
    {
      $this->deleteResponse = $deleteResponse;
      return $this;
    }

}
