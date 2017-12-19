<?php

namespace Selligent\MessageStudio;

class ContentBlockToken
{

    /**
     * @var ContentBlockId $contentBlockId
     */
    protected $contentBlockId = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @param ContentBlockId $contentBlockId
     * @param string $token
     */
    public function __construct($contentBlockId, $token)
    {
      $this->contentBlockId = $contentBlockId;
      $this->token = $token;
    }

    /**
     * @return ContentBlockId
     */
    public function getContentBlockId()
    {
      return $this->contentBlockId;
    }

    /**
     * @param ContentBlockId $contentBlockId
     * @return \Selligent\MessageStudio\ContentBlockToken
     */
    public function setContentBlockId($contentBlockId)
    {
      $this->contentBlockId = $contentBlockId;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Selligent\MessageStudio\ContentBlockToken
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
