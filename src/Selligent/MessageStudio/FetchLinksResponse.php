<?php

namespace Selligent\MessageStudio;

class FetchLinksResponse extends BatchResponse
{

    /**
     * @var FetchLinkResponse[] $fetchLinkResponse
     */
    protected $fetchLinkResponse = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FetchLinkResponse[]
     */
    public function getFetchLinkResponse()
    {
      return $this->fetchLinkResponse;
    }

    /**
     * @param FetchLinkResponse[] $fetchLinkResponse
     * @return \Selligent\MessageStudio\FetchLinksResponse
     */
    public function setFetchLinkResponse(array $fetchLinkResponse = null)
    {
      $this->fetchLinkResponse = $fetchLinkResponse;
      return $this;
    }

}
