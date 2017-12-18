<?php

namespace Selligent\MessageStudio;

class ValidateXslResponse extends Response
{

    /**
     * @var boolean $valid
     */
    protected $valid = null;

    /**
     * @param boolean $valid
     */
    public function __construct($valid)
    {
      $this->valid = $valid;
    }

    /**
     * @return boolean
     */
    public function getValid()
    {
      return $this->valid;
    }

    /**
     * @param boolean $valid
     * @return \Selligent\MessageStudio\ValidateXslResponse
     */
    public function setValid($valid)
    {
      $this->valid = $valid;
      return $this;
    }

}
