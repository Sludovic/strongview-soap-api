<?php

namespace Selligent\MessageStudio;

class ImportContentRequest
{

    /**
     * @var base64Binary $content
     */
    protected $content = null;

    /**
     * @param base64Binary $content
     */
    public function __construct($content)
    {
      $this->content = $content;
    }

    /**
     * @return base64Binary
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param base64Binary $content
     * @return \Selligent\MessageStudio\ImportContentRequest
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

}
