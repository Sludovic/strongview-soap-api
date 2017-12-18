<?php

namespace Selligent\MessageStudio;

class DeepLink
{

    /**
     * @var DeepLinkType $type
     */
    protected $type = null;

    /**
     * @var string $url
     */
    protected $url = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeepLinkType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param DeepLinkType $type
     * @return \Selligent\MessageStudio\DeepLink
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
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
     * @return \Selligent\MessageStudio\DeepLink
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

}
