<?php

namespace Selligent\MessageStudio;

class IncludedTargetField extends TargetField
{

    /**
     * @var string $seedColumnName
     */
    protected $seedColumnName = null;

    /**
     * @param TargetId $targetId
     */
    public function __construct($targetId)
    {
      parent::__construct($targetId);
    }

    /**
     * @return string
     */
    public function getSeedColumnName()
    {
      return $this->seedColumnName;
    }

    /**
     * @param string $seedColumnName
     * @return \Selligent\MessageStudio\IncludedTargetField
     */
    public function setSeedColumnName($seedColumnName)
    {
      $this->seedColumnName = $seedColumnName;
      return $this;
    }

}
