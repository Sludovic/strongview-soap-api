<?php

namespace Selligent\MessageStudio;

class RuleIfPartCondition
{

    /**
     * @var string $column
     */
    protected $column = null;

    /**
     * @var ComparisonOperation $op
     */
    protected $op = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $column
     * @param ComparisonOperation $op
     */
    public function __construct($column, $op)
    {
      $this->column = $column;
      $this->op = $op;
    }

    /**
     * @return string
     */
    public function getColumn()
    {
      return $this->column;
    }

    /**
     * @param string $column
     * @return \Selligent\MessageStudio\RuleIfPartCondition
     */
    public function setColumn($column)
    {
      $this->column = $column;
      return $this;
    }

    /**
     * @return ComparisonOperation
     */
    public function getOp()
    {
      return $this->op;
    }

    /**
     * @param ComparisonOperation $op
     * @return \Selligent\MessageStudio\RuleIfPartCondition
     */
    public function setOp($op)
    {
      $this->op = $op;
      return $this;
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
     * @return \Selligent\MessageStudio\RuleIfPartCondition
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
