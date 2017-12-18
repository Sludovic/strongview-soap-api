<?php

namespace Selligent\MessageStudio;

class TargetField
{

    /**
     * @var TargetId $targetId
     */
    protected $targetId = null;

    /**
     * @var string $suppressionColumnName
     */
    protected $suppressionColumnName = null;

    /**
     * @param TargetId $targetId
     */
    public function __construct($targetId)
    {
      $this->targetId = $targetId;
    }

    /**
     * @return TargetId
     */
    public function getTargetId()
    {
      return $this->targetId;
    }

    /**
     * @param TargetId $targetId
     * @return \Selligent\MessageStudio\TargetField
     */
    public function setTargetId($targetId)
    {
      $this->targetId = $targetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSuppressionColumnName()
    {
      return $this->suppressionColumnName;
    }

    /**
     * @param string $suppressionColumnName
     * @return \Selligent\MessageStudio\TargetField
     */
    public function setSuppressionColumnName($suppressionColumnName)
    {
      $this->suppressionColumnName = $suppressionColumnName;
      return $this;
    }

}
