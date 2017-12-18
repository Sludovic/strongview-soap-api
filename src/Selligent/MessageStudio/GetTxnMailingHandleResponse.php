<?php

namespace Selligent\MessageStudio;

class GetTxnMailingHandleResponse extends Response
{

    /**
     * @var string $handle
     */
    protected $handle = null;

    /**
     * @param string $handle
     */
    public function __construct($handle)
    {
      $this->handle = $handle;
    }

    /**
     * @return string
     */
    public function getHandle()
    {
      return $this->handle;
    }

    /**
     * @param string $handle
     * @return \Selligent\MessageStudio\GetTxnMailingHandleResponse
     */
    public function setHandle($handle)
    {
      $this->handle = $handle;
      return $this;
    }

}
