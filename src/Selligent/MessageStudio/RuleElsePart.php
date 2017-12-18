<?php

namespace Selligent\MessageStudio;

class RuleElsePart
{

    /**
     * @var ColumnRuleValue $columnRuleValue
     */
    protected $columnRuleValue = null;

    /**
     * @var ContentBlockTokenRuleValue $contentBlockTokenRuleValue
     */
    protected $contentBlockTokenRuleValue = null;

    /**
     * @var NestedRuleRuleValue $nestedRuleRuleValue
     */
    protected $nestedRuleRuleValue = null;

    /**
     * @var TextRuleValue $textRuleValue
     */
    protected $textRuleValue = null;

    /**
     * @param ColumnRuleValue $columnRuleValue
     * @param ContentBlockTokenRuleValue $contentBlockTokenRuleValue
     * @param NestedRuleRuleValue $nestedRuleRuleValue
     * @param TextRuleValue $textRuleValue
     */
    public function __construct($columnRuleValue, $contentBlockTokenRuleValue, $nestedRuleRuleValue, $textRuleValue)
    {
      $this->columnRuleValue = $columnRuleValue;
      $this->contentBlockTokenRuleValue = $contentBlockTokenRuleValue;
      $this->nestedRuleRuleValue = $nestedRuleRuleValue;
      $this->textRuleValue = $textRuleValue;
    }

    /**
     * @return ColumnRuleValue
     */
    public function getColumnRuleValue()
    {
      return $this->columnRuleValue;
    }

    /**
     * @param ColumnRuleValue $columnRuleValue
     * @return \Selligent\MessageStudio\RuleElsePart
     */
    public function setColumnRuleValue($columnRuleValue)
    {
      $this->columnRuleValue = $columnRuleValue;
      return $this;
    }

    /**
     * @return ContentBlockTokenRuleValue
     */
    public function getContentBlockTokenRuleValue()
    {
      return $this->contentBlockTokenRuleValue;
    }

    /**
     * @param ContentBlockTokenRuleValue $contentBlockTokenRuleValue
     * @return \Selligent\MessageStudio\RuleElsePart
     */
    public function setContentBlockTokenRuleValue($contentBlockTokenRuleValue)
    {
      $this->contentBlockTokenRuleValue = $contentBlockTokenRuleValue;
      return $this;
    }

    /**
     * @return NestedRuleRuleValue
     */
    public function getNestedRuleRuleValue()
    {
      return $this->nestedRuleRuleValue;
    }

    /**
     * @param NestedRuleRuleValue $nestedRuleRuleValue
     * @return \Selligent\MessageStudio\RuleElsePart
     */
    public function setNestedRuleRuleValue($nestedRuleRuleValue)
    {
      $this->nestedRuleRuleValue = $nestedRuleRuleValue;
      return $this;
    }

    /**
     * @return TextRuleValue
     */
    public function getTextRuleValue()
    {
      return $this->textRuleValue;
    }

    /**
     * @param TextRuleValue $textRuleValue
     * @return \Selligent\MessageStudio\RuleElsePart
     */
    public function setTextRuleValue($textRuleValue)
    {
      $this->textRuleValue = $textRuleValue;
      return $this;
    }

}
