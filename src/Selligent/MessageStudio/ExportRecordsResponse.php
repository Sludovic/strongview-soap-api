<?php

namespace Selligent\MessageStudio;

class ExportRecordsResponse extends Response
{

    /**
     * @var base64Binary $data
     */
    protected $data = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return base64Binary
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param base64Binary $data
     * @return \Selligent\MessageStudio\ExportRecordsResponse
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
