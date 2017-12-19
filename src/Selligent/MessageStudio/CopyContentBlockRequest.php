<?php

namespace Selligent\MessageStudio;

class CopyContentBlockRequest extends CopyRequest
{

    /**
     * @var ContentBlockId $fromId
     */
    protected $fromId = null;

    /**
     * @var OrganizationId $newOrganizationId
     */
    protected $newOrganizationId = null;

    /**
     * @param string $newName
     * @param ContentBlockId $fromId
     */
    public function __construct($newName, $fromId)
    {
      parent::__construct($newName);
      $this->fromId = $fromId;
    }

    /**
     * @return ContentBlockId
     */
    public function getFromId()
    {
      return $this->fromId;
    }

    /**
     * @param ContentBlockId $fromId
     * @return \Selligent\MessageStudio\CopyContentBlockRequest
     */
    public function setFromId($fromId)
    {
      $this->fromId = $fromId;
      return $this;
    }

    /**
     * @return OrganizationId
     */
    public function getNewOrganizationId()
    {
      return $this->newOrganizationId;
    }

    /**
     * @param OrganizationId $newOrganizationId
     * @return \Selligent\MessageStudio\CopyContentBlockRequest
     */
    public function setNewOrganizationId($newOrganizationId)
    {
      $this->newOrganizationId = $newOrganizationId;
      return $this;
    }

}
