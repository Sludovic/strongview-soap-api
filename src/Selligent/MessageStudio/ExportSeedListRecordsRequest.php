<?php

namespace Selligent\MessageStudio;

class ExportSeedListRecordsRequest extends ExportRecordsRequest
{

    /**
     * @var SeedListId $seedListId
     */
    protected $seedListId = null;

    /**
     * @param SeedListId $seedListId
     */
    public function __construct($seedListId)
    {
      $this->seedListId = $seedListId;
    }

    /**
     * @return SeedListId
     */
    public function getSeedListId()
    {
      return $this->seedListId;
    }

    /**
     * @param SeedListId $seedListId
     * @return \Selligent\MessageStudio\ExportSeedListRecordsRequest
     */
    public function setSeedListId($seedListId)
    {
      $this->seedListId = $seedListId;
      return $this;
    }

}
