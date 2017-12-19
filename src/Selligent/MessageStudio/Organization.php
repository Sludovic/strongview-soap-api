<?php

namespace Selligent\MessageStudio;

class Organization extends BaseObject
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var base64Binary $logo
     */
    protected $logo = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var OrganizationId $parentId
     */
    protected $parentId = null;

    /**
     * @var string $viewInBrowserExceptionURL
     */
    protected $viewInBrowserExceptionURL = null;

    /**
     * @var string $forward2FriendExceptionURL
     */
    protected $forward2FriendExceptionURL = null;

    /**
     * @var string $socialNotesExceptionURL
     */
    protected $socialNotesExceptionURL = null;

    /**
     * @var string $socialNotesWidget
     */
    protected $socialNotesWidget = null;

    /**
     * @var string $forward2FriendOffer
     */
    protected $forward2FriendOffer = null;

    /**
     * @var Forward2FriendOfferTrackingOption $forward2FriendOfferTrackingOption
     */
    protected $forward2FriendOfferTrackingOption = null;

    /**
     * @var string $influencerSecretKey
     */
    protected $influencerSecretKey = null;

    /**
     * @var string $influencerClientUuid
     */
    protected $influencerClientUuid = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      parent::__construct();
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Selligent\MessageStudio\Organization
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getLogo()
    {
      return $this->logo;
    }

    /**
     * @param base64Binary $logo
     * @return \Selligent\MessageStudio\Organization
     */
    public function setLogo($logo)
    {
      $this->logo = $logo;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Selligent\MessageStudio\Organization
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return OrganizationId
     */
    public function getParentId()
    {
      return $this->parentId;
    }

    /**
     * @param OrganizationId $parentId
     * @return \Selligent\MessageStudio\Organization
     */
    public function setParentId($parentId)
    {
      $this->parentId = $parentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getViewInBrowserExceptionURL()
    {
      return $this->viewInBrowserExceptionURL;
    }

    /**
     * @param string $viewInBrowserExceptionURL
     * @return \Selligent\MessageStudio\Organization
     */
    public function setViewInBrowserExceptionURL($viewInBrowserExceptionURL)
    {
      $this->viewInBrowserExceptionURL = $viewInBrowserExceptionURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getForward2FriendExceptionURL()
    {
      return $this->forward2FriendExceptionURL;
    }

    /**
     * @param string $forward2FriendExceptionURL
     * @return \Selligent\MessageStudio\Organization
     */
    public function setForward2FriendExceptionURL($forward2FriendExceptionURL)
    {
      $this->forward2FriendExceptionURL = $forward2FriendExceptionURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getSocialNotesExceptionURL()
    {
      return $this->socialNotesExceptionURL;
    }

    /**
     * @param string $socialNotesExceptionURL
     * @return \Selligent\MessageStudio\Organization
     */
    public function setSocialNotesExceptionURL($socialNotesExceptionURL)
    {
      $this->socialNotesExceptionURL = $socialNotesExceptionURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getSocialNotesWidget()
    {
      return $this->socialNotesWidget;
    }

    /**
     * @param string $socialNotesWidget
     * @return \Selligent\MessageStudio\Organization
     */
    public function setSocialNotesWidget($socialNotesWidget)
    {
      $this->socialNotesWidget = $socialNotesWidget;
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
     * @return \Selligent\MessageStudio\Organization
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
     * @return \Selligent\MessageStudio\Organization
     */
    public function setForward2FriendOfferTrackingOption($forward2FriendOfferTrackingOption)
    {
      $this->forward2FriendOfferTrackingOption = $forward2FriendOfferTrackingOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getInfluencerSecretKey()
    {
      return $this->influencerSecretKey;
    }

    /**
     * @param string $influencerSecretKey
     * @return \Selligent\MessageStudio\Organization
     */
    public function setInfluencerSecretKey($influencerSecretKey)
    {
      $this->influencerSecretKey = $influencerSecretKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getInfluencerClientUuid()
    {
      return $this->influencerClientUuid;
    }

    /**
     * @param string $influencerClientUuid
     * @return \Selligent\MessageStudio\Organization
     */
    public function setInfluencerClientUuid($influencerClientUuid)
    {
      $this->influencerClientUuid = $influencerClientUuid;
      return $this;
    }

}
