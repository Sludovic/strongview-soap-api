<?php

namespace Selligent\MessageStudio;

class TagFilter extends BaseFilter
{

    /**
     * @var ScalarStringFilterCondition $tagName
     */
    protected $tagName = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ScalarStringFilterCondition
     */
    public function getTagName()
    {
      return $this->tagName;
    }

    /**
     * @param ScalarStringFilterCondition $tagName
     * @return \Selligent\MessageStudio\TagFilter
     */
    public function setTagName($tagName)
    {
      $this->tagName = $tagName;
      return $this;
    }

}
