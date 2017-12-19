<?php

namespace Selligent\MessageStudio;

class GetSingleSignOnURLResponse extends Response
{

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @param string $url
     */
    public function __construct($url)
    {
      $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Selligent\MessageStudio\GetSingleSignOnURLResponse
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
