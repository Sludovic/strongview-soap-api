<?php

namespace Selligent\MessageStudio;

class ArrayStringFilterCondition extends StringFilterCondition
{

    /**
     * @var string[] $value
     */
    protected $value = null;

    /**
     * @var FilterArrayOperator $operator
     */
    protected $operator = null;

    /**
     * @param FilterArrayOperator $operator
     */
    public function __construct($operator)
    {
      $this->operator = $operator;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string[] $value
     * @return \Selligent\MessageStudio\ArrayStringFilterCondition
     */
    public function setValue(array $value = null)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return FilterArrayOperator
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param FilterArrayOperator $operator
     * @return \Selligent\MessageStudio\ArrayStringFilterCondition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
