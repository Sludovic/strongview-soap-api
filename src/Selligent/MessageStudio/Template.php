<?php

namespace Selligent\MessageStudio;

class Template extends BaseTemplate
{

    /**
     * @var SystemAddressId $bounceAddressId
     */
    protected $bounceAddressId = null;

    /**
     * @var SystemAddressId $fromAddressId
     */
    protected $fromAddressId = null;

    /**
     * @var string $fromName
     */
    protected $fromName = null;

    /**
     * @var string[] $header
     */
    protected $header = null;

    /**
     * @var SystemAddressId $replyAddressId
     */
    protected $replyAddressId = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $forward2FriendOffer
     */
    protected $forward2FriendOffer = null;

    /**
     * @var Forward2FriendOfferTrackingOption $forward2FriendOfferTrackingOption
     */
    protected $forward2FriendOfferTrackingOption = null;

    /**
     * @var boolean $openTracking
     */
    protected $openTracking = null;

    /**
     * @param Encoding $bodyEncoding
     * @param Encoding $headerEncoding
     * @param boolean $isApproved
     * @param MessagePart[] $messagePart
     * @param CharSet $outputBodyCharSet
     * @param string $outputBodyCharSetToken
     * @param CharSet $outputHeaderCharSet
     * @param string $outputHeaderCharSetToken
     * @param string $name
     * @param TargetId $targetId
     * @param DataSourceId $dataSourceId
     * @param boolean $openTracking
     */
    public function __construct($bodyEncoding, $headerEncoding, $isApproved, array $messagePart, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $name, $targetId, $dataSourceId, $openTracking)
    {
      parent::__construct($bodyEncoding, $headerEncoding, $isApproved, $messagePart, $outputBodyCharSet, $outputBodyCharSetToken, $outputHeaderCharSet, $outputHeaderCharSetToken, $name, $targetId, $dataSourceId);
      $this->openTracking = $openTracking;
    }

    /**
     * @return SystemAddressId
     */
    public function getBounceAddressId()
    {
      return $this->bounceAddressId;
    }

    /**
     * @param SystemAddressId $bounceAddressId
     * @return \Selligent\MessageStudio\Template
     */
    public function setBounceAddressId($bounceAddressId)
    {
      $this->bounceAddressId = $bounceAddressId;
      return $this;
    }

    /**
     * @return SystemAddressId
     */
    public function getFromAddressId()
    {
      return $this->fromAddressId;
    }

    /**
     * @param SystemAddressId $fromAddressId
     * @return \Selligent\MessageStudio\Template
     */
    public function setFromAddressId($fromAddressId)
    {
      $this->fromAddressId = $fromAddressId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromName()
    {
      return $this->fromName;
    }

    /**
     * @param string $fromName
     * @return \Selligent\MessageStudio\Template
     */
    public function setFromName($fromName)
    {
      $this->fromName = $fromName;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param string[] $header
     * @return \Selligent\MessageStudio\Template
     */
    public function setHeader(array $header = null)
    {
      $this->header = $header;
      return $this;
    }

    /**
     * @return SystemAddressId
     */
    public function getReplyAddressId()
    {
      return $this->replyAddressId;
    }

    /**
     * @param SystemAddressId $replyAddressId
     * @return \Selligent\MessageStudio\Template
     */
    public function setReplyAddressId($replyAddressId)
    {
      $this->replyAddressId = $replyAddressId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \Selligent\MessageStudio\Template
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getForward2FriendOffer()
    {
      return $this->forward2FriendOffer;
    }

    /**
     * @param string $forward2FriendOffer
     * @return \Selligent\MessageStudio\Template
     */
    public function setForward2FriendOffer($forward2FriendOffer)
    {
      $this->forward2FriendOffer = $forward2FriendOffer;
      return $this;
    }

    /**
     * @return Forward2FriendOfferTrackingOption
     */
    public function getForward2FriendOfferTrackingOption()
    {
      return $this->forward2FriendOfferTrackingOption;
    }

    /**
     * @param Forward2FriendOfferTrackingOption $forward2FriendOfferTrackingOption
     * @return \Selligent\MessageStudio\Template
     */
    public function setForward2FriendOfferTrackingOption($forward2FriendOfferTrackingOption)
    {
      $this->forward2FriendOfferTrackingOption = $forward2FriendOfferTrackingOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpenTracking()
    {
      return $this->openTracking;
    }

    /**
     * @param boolean $openTracking
     * @return \Selligent\MessageStudio\Template
     */
    public function setOpenTracking($openTracking)
    {
      $this->openTracking = $openTracking;
      return $this;
    }

}
