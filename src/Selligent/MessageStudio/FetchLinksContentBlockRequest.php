<?php

namespace Selligent\MessageStudio;

class FetchLinksContentBlockRequest extends FetchLinksRequest
{

    /**
     * @var ContentBlock $contentBlock
     */
    protected $contentBlock = null;

    /**
     * @param ContentBlock $contentBlock
     */
    public function __construct($contentBlock)
    {
      $this->contentBlock = $contentBlock;
    }

    /**
     * @return ContentBlock
     */
    public function getContentBlock()
    {
      return $this->contentBlock;
    }

    /**
     * @param ContentBlock $contentBlock
     * @return \Selligent\MessageStudio\FetchLinksContentBlockRequest
     */
    public function setContentBlock($contentBlock)
    {
      $this->contentBlock = $contentBlock;
      return $this;
    }

}
