<?php

namespace Selligent\MessageStudio;

class PersonalizeResponse extends Response
{

    /**
     * @var string $personalizedMessage
     */
    protected $personalizedMessage = null;

    /**
     * @param string $personalizedMessage
     */
    public function __construct($personalizedMessage)
    {
      $this->personalizedMessage = $personalizedMessage;
    }

    /**
     * @return string
     */
    public function getPersonalizedMessage()
    {
      return $this->personalizedMessage;
    }

    /**
     * @param string $personalizedMessage
     * @return \Selligent\MessageStudio\PersonalizeResponse
     */
    public function setPersonalizedMessage($personalizedMessage)
    {
      $this->personalizedMessage = $personalizedMessage;
      return $this;
    }

}
