<?php

namespace Selligent\MessageStudio;

class CopyRuleRequest extends CopyRequest
{

    /**
     * @var RuleId $fromId
     */
    protected $fromId = null;

    /**
     * @param string $newName
     * @param RuleId $fromId
     */
    public function __construct($newName, $fromId)
    {
      parent::__construct($newName);
      $this->fromId = $fromId;
    }

    /**
     * @return RuleId
     */
    public function getFromId()
    {
      return $this->fromId;
    }

    /**
     * @param RuleId $fromId
     * @return \Selligent\MessageStudio\CopyRuleRequest
     */
    public function setFromId($fromId)
    {
      $this->fromId = $fromId;
      return $this;
    }

}
