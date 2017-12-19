<?php

namespace Selligent\MessageStudio;

class ArrayIdFilterCondition extends IdFilterCondition
{

    /**
     * @var ObjectId[] $value
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
     * @return ObjectId[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param ObjectId[] $value
     * @return \Selligent\MessageStudio\ArrayIdFilterCondition
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
     * @return \Selligent\MessageStudio\ArrayIdFilterCondition
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
