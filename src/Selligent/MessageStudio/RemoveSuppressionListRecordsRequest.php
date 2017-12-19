<?php

namespace Selligent\MessageStudio;

class RemoveSuppressionListRecordsRequest extends RemoveRecordsRequest
{

    /**
     * @var SuppressionListId $suppressionListId
     */
    protected $suppressionListId = null;

    /**
     * @var string[] $addressMatch
     */
    protected $addressMatch = null;

    /**
     * @var base64Binary $addressMatchesAttachment
     */
    protected $addressMatchesAttachment = null;

    /**
     * @param SuppressionListId $suppressionListId
     * @param string[] $addressMatch
     * @param base64Binary $addressMatchesAttachment
     */
    public function __construct($suppressionListId, array $addressMatch, $addressMatchesAttachment)
    {
      $this->suppressionListId = $suppressionListId;
      $this->addressMatch = $addressMatch;
      $this->addressMatchesAttachment = $addressMatchesAttachment;
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
     * @return \Selligent\MessageStudio\RemoveSuppressionListRecordsRequest
     */
    public function setSuppressionListId($suppressionListId)
    {
      $this->suppressionListId = $suppressionListId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAddressMatch()
    {
      return $this->addressMatch;
    }

    /**
     * @param string[] $addressMatch
     * @return \Selligent\MessageStudio\RemoveSuppressionListRecordsRequest
     */
    public function setAddressMatch(array $addressMatch)
    {
      $this->addressMatch = $addressMatch;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getAddressMatchesAttachment()
    {
      return $this->addressMatchesAttachment;
    }

    /**
     * @param base64Binary $addressMatchesAttachment
     * @return \Selligent\MessageStudio\RemoveSuppressionListRecordsRequest
     */
    public function setAddressMatchesAttachment($addressMatchesAttachment)
    {
      $this->addressMatchesAttachment = $addressMatchesAttachment;
      return $this;
    }

}
