<?php

namespace Selligent\MessageStudio;

class BatchUpdateResponse extends BatchResponse
{

    /**
     * @var UpdateResponse[] $updateResponse
     */
    protected $updateResponse = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return UpdateResponse[]
     */
    public function getUpdateResponse()
    {
      return $this->updateResponse;
    }

    /**
     * @param UpdateResponse[] $updateResponse
     * @return \Selligent\MessageStudio\BatchUpdateResponse
     */
    public function setUpdateResponse(array $updateResponse = null)
    {
      $this->updateResponse = $updateResponse;
      return $this;
    }

}
