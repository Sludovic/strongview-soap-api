<?php

namespace Selligent\MessageStudio;

class ArrayIntegerFilterCondition extends IntegerFilterCondition
{

    /**
     * @var int[] $value
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
     * @return int[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int[] $value
     * @return \Selligent\MessageStudio\ArrayIntegerFilterCondition
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
     * @return \Selligent\MessageStudio\ArrayIntegerFilterCondition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
