<?php

namespace Selligent\MessageStudio;

class GetAllEasListByMailingIdResponse extends Response
{

    /**
     * @var GetAllEasByMailingIdResponse[] $GetAllEasByMailingIdResponse
     */
    protected $GetAllEasByMailingIdResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAllEasByMailingIdResponse[]
     */
    public function getGetAllEasByMailingIdResponse()
    {
      return $this->GetAllEasByMailingIdResponse;
    }

    /**
     * @param GetAllEasByMailingIdResponse[] $GetAllEasByMailingIdResponse
     * @return \Selligent\MessageStudio\GetAllEasListByMailingIdResponse
     */
    public function setGetAllEasByMailingIdResponse(array $GetAllEasByMailingIdResponse = null)
    {
      $this->GetAllEasByMailingIdResponse = $GetAllEasByMailingIdResponse;
      return $this;
    }

}
