<?php

namespace Selligent\MessageStudio;

class TextRuleValue extends RuleValue
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $value
     */
    public function __construct($value)
    {
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Selligent\MessageStudio\TextRuleValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
