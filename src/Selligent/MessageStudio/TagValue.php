<?php

namespace Selligent\MessageStudio;

class TagValue
{

    /**
     * @var TagValueId $tagValueId
     */
    protected $tagValueId = null;

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
     * @return TagValueId
     */
    public function getTagValueId()
    {
      return $this->tagValueId;
    }

    /**
     * @param TagValueId $tagValueId
     * @return \Selligent\MessageStudio\TagValue
     */
    public function setTagValueId($tagValueId)
    {
      $this->tagValueId = $tagValueId;
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
     * @return \Selligent\MessageStudio\TagValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
