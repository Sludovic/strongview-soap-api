<?php

namespace Selligent\MessageStudio;

class ContentBlockTokenRuleValue extends RuleValue
{

    /**
     * @var ContentBlockToken $value
     */
    protected $value = null;

    /**
     * @param ContentBlockToken $value
     */
    public function __construct($value)
    {
      $this->value = $value;
    }

    /**
     * @return ContentBlockToken
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param ContentBlockToken $value
     * @return \Selligent\MessageStudio\ContentBlockTokenRuleValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
