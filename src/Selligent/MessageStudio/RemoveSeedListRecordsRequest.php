<?php

namespace Selligent\MessageStudio;

class RemoveSeedListRecordsRequest extends RemoveRecordsRequest
{

    /**
     * @var SeedListId $seedListId
     */
    protected $seedListId = null;

    /**
     * @var string[] $address
     */
    protected $address = null;

    /**
     * @var base64Binary $addressesAttachment
     */
    protected $addressesAttachment = null;

    /**
     * @param SeedListId $seedListId
     * @param string[] $address
     * @param base64Binary $addressesAttachment
     */
    public function __construct($seedListId, array $address, $addressesAttachment)
    {
      $this->seedListId = $seedListId;
      $this->address = $address;
      $this->addressesAttachment = $addressesAttachment;
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
     * @return \Selligent\MessageStudio\RemoveSeedListRecordsRequest
     */
    public function setSeedListId($seedListId)
    {
      $this->seedListId = $seedListId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string[] $address
     * @return \Selligent\MessageStudio\RemoveSeedListRecordsRequest
     */
    public function setAddress(array $address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getAddressesAttachment()
    {
      return $this->addressesAttachment;
    }

    /**
     * @param base64Binary $addressesAttachment
     * @return \Selligent\MessageStudio\RemoveSeedListRecordsRequest
     */
    public function setAddressesAttachment($addressesAttachment)
    {
      $this->addressesAttachment = $addressesAttachment;
      return $this;
    }

}
