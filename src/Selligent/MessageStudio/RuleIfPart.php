<?php

namespace Selligent\MessageStudio;

class RuleIfPart
{

    /**
     * @var RuleIfPartCondition $condition1
     */
    protected $condition1 = null;

    /**
     * @var LogicalOperation $logicalOperation
     */
    protected $logicalOperation = null;

    /**
     * @var RuleIfPartCondition $condition
     */
    protected $condition = null;

    /**
     * @param RuleIfPartCondition $condition1
     * @param LogicalOperation $logicalOperation
     * @param RuleIfPartCondition $condition
     */
    public function __construct($condition1, $logicalOperation, $condition)
    {
      $this->condition1 = $condition1;
      $this->logicalOperation = $logicalOperation;
      $this->condition = $condition;
    }

    /**
     * @return RuleIfPartCondition
     */
    public function getCondition1()
    {
      return $this->condition1;
    }

    /**
     * @param RuleIfPartCondition $condition1
     * @return \Selligent\MessageStudio\RuleIfPart
     */
    public function setCondition1($condition1)
    {
      $this->condition1 = $condition1;
      return $this;
    }

    /**
     * @return LogicalOperation
     */
    public function getLogicalOperation()
    {
      return $this->logicalOperation;
    }

    /**
     * @param LogicalOperation $logicalOperation
     * @return \Selligent\MessageStudio\RuleIfPart
     */
    public function setLogicalOperation($logicalOperation)
    {
      $this->logicalOperation = $logicalOperation;
      return $this;
    }

    /**
     * @return RuleIfPartCondition
     */
    public function getCondition()
    {
      return $this->condition;
    }

    /**
     * @param RuleIfPartCondition $condition
     * @return \Selligent\MessageStudio\RuleIfPart
     */
    public function setCondition($condition)
    {
      $this->condition = $condition;
      return $this;
    }

}
