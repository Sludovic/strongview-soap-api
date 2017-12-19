<?php

namespace Selligent\MessageStudio;

class FetchLinkResponse extends Response
{

    /**
     * @var NamedLink $namedLink
     */
    protected $namedLink = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NamedLink
     */
    public function getNamedLink()
    {
      return $this->namedLink;
    }

    /**
     * @param NamedLink $namedLink
     * @return \Selligent\MessageStudio\FetchLinkResponse
     */
    public function setNamedLink($namedLink)
    {
      $this->namedLink = $namedLink;
      return $this;
    }

}
