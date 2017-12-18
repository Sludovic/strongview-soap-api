<?php

namespace Selligent\MessageStudio;

class RuleThenPart
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
     * @var TextRuleValue $textRuleValue
     */
    protected $textRuleValue = null;

    /**
     * @param ColumnRuleValue $columnRuleValue
     * @param ContentBlockTokenRuleValue $contentBlockTokenRuleValue
     * @param TextRuleValue $textRuleValue
     */
    public function __construct($columnRuleValue, $contentBlockTokenRuleValue, $textRuleValue)
    {
      $this->columnRuleValue = $columnRuleValue;
      $this->contentBlockTokenRuleValue = $contentBlockTokenRuleValue;
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
     * @return \Selligent\MessageStudio\RuleThenPart
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
     * @return \Selligent\MessageStudio\RuleThenPart
     */
    public function setContentBlockTokenRuleValue($contentBlockTokenRuleValue)
    {
      $this->contentBlockTokenRuleValue = $contentBlockTokenRuleValue;
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
     * @return \Selligent\MessageStudio\RuleThenPart
     */
    public function setTextRuleValue($textRuleValue)
    {
      $this->textRuleValue = $textRuleValue;
      return $this;
    }

}
