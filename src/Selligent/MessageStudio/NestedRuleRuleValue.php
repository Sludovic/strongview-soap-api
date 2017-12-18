<?php

namespace Selligent\MessageStudio;

class NestedRuleRuleValue extends RuleValue
{

    /**
     * @var RuleId $value
     */
    protected $value = null;

    /**
     * @param RuleId $value
     */
    public function __construct($value)
    {
      $this->value = $value;
    }

    /**
     * @return RuleId
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param RuleId $value
     * @return \Selligent\MessageStudio\NestedRuleRuleValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
