<?php

namespace Selligent\MessageStudio;

class ExportSuppressionListRecordsRequest extends ExportRecordsRequest
{

    /**
     * @var SuppressionListId $suppressionListId
     */
    protected $suppressionListId = null;

    /**
     * @param SuppressionListId $suppressionListId
     */
    public function __construct($suppressionListId)
    {
      $this->suppressionListId = $suppressionListId;
    }

    /**
     * @return SuppressionListId
     */
    public function getSuppressionListId()
    {
      return $this->suppressionListId;
    }

    /**
     * @param SuppressionListId $suppressionListId
     * @return \Selligent\MessageStudio\ExportSuppressionListRecordsRequest
     */
    public function setSuppressionListId($suppressionListId)
    {
      $this->suppressionListId = $suppressionListId;
      return $this;
    }

}
