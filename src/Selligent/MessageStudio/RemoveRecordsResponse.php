<?php

namespace Selligent\MessageStudio;

class RemoveRecordsResponse extends Response
{

    /**
     * @var int $recordsRemoved
     */
    protected $recordsRemoved = null;

    /**
     * @param int $recordsRemoved
     */
    public function __construct($recordsRemoved)
    {
      $this->recordsRemoved = $recordsRemoved;
    }

    /**
     * @return int
     */
    public function getRecordsRemoved()
    {
      return $this->recordsRemoved;
    }

    /**
     * @param int $recordsRemoved
     * @return \Selligent\MessageStudio\RemoveRecordsResponse
     */
    public function setRecordsRemoved($recordsRemoved)
    {
      $this->recordsRemoved = $recordsRemoved;
      return $this;
    }

}
