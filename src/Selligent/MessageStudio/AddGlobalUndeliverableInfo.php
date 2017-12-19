<?php

namespace Selligent\MessageStudio;

class AddGlobalUndeliverableInfo extends Response
{

    /**
     * @var OrganizationId $orgnizationId
     */
    protected $orgnizationId = null;

    /**
     * @param OrganizationId $orgnizationId
     */
    public function __construct($orgnizationId)
    {
      $this->orgnizationId = $orgnizationId;
    }

    /**
     * @return OrganizationId
     */
    public function getOrgnizationId()
    {
      return $this->orgnizationId;
    }

    /**
     * @param OrganizationId $orgnizationId
     * @return \Selligent\MessageStudio\AddGlobalUndeliverableInfo
     */
    public function setOrgnizationId($orgnizationId)
    {
      $this->orgnizationId = $orgnizationId;
      return $this;
    }

}
