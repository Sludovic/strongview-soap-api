<?php

namespace Selligent\MessageStudio;

class ChannelHeader
{

    /**
     * @var string $headerName
     */
    protected $headerName = null;

    /**
     * @var string $headerValue
     */
    protected $headerValue = null;

    /**
     * @var string $headerType
     */
    protected $headerType = null;

    /**
     * @param string $headerName
     * @param string $headerValue
     */
    public function __construct($headerName, $headerValue)
    {
      $this->headerName = $headerName;
      $this->headerValue = $headerValue;
    }

    /**
     * @return string
     */
    public function getHeaderName()
    {
      return $this->headerName;
    }

    /**
     * @param string $headerName
     * @return \Selligent\MessageStudio\ChannelHeader
     */
    public function setHeaderName($headerName)
    {
      $this->headerName = $headerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeaderValue()
    {
      return $this->headerValue;
    }

    /**
     * @param string $headerValue
     * @return \Selligent\MessageStudio\ChannelHeader
     */
    public function setHeaderValue($headerValue)
    {
      $this->headerValue = $headerValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getHeaderType()
    {
      return $this->headerType;
    }

    /**
     * @param string $headerType
     * @return \Selligent\MessageStudio\ChannelHeader
     */
    public function setHeaderType($headerType)
    {
      $this->headerType = $headerType;
      return $this;
    }

}
