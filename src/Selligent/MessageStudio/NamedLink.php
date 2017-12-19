<?php

namespace Selligent\MessageStudio;

class NamedLink
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $linkId
     */
    protected $linkId = null;

    /**
     * @var TrackingTagType $tagType
     */
    protected $tagType = null;

    /**
     * @var TrackingTagFormat $tagFormat
     */
    protected $tagFormat = null;

    /**
     * @var NameValuePair[] $trackingTagProperties
     */
    protected $trackingTagProperties = null;

    /**
     * @var WebAnalytics $webAnalytics
     */
    protected $webAnalytics = null;

    /**
     * @var DeepLink[] $deepLinks
     */
    protected $deepLinks = null;

    /**
     * @param string $url
     * @param TrackingTagType $tagType
     */
    public function __construct($url, $tagType)
    {
      $this->url = $url;
      $this->tagType = $tagType;
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
     * @return \Selligent\MessageStudio\NamedLink
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Selligent\MessageStudio\NamedLink
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkId()
    {
      return $this->linkId;
    }

    /**
     * @param string $linkId
     * @return \Selligent\MessageStudio\NamedLink
     */
    public function setLinkId($linkId)
    {
      $this->linkId = $linkId;
      return $this;
    }

    /**
     * @return TrackingTagType
     */
    public function getTagType()
    {
      return $this->tagType;
    }

    /**
     * @param TrackingTagType $tagType
     * @return \Selligent\MessageStudio\NamedLink
     */
    public function setTagType($tagType)
    {
      $this->tagType = $tagType;
      return $this;
    }

    /**
     * @return TrackingTagFormat
     */
    public function getTagFormat()
    {
      return $this->tagFormat;
    }

    /**
     * @param TrackingTagFormat $tagFormat
     * @return \Selligent\MessageStudio\NamedLink
     */
    public function setTagFormat($tagFormat)
    {
      $this->tagFormat = $tagFormat;
      return $this;
    }

    /**
     * @return NameValuePair[]
     */
    public function getTrackingTagProperties()
    {
      return $this->trackingTagProperties;
    }

    /**
     * @param NameValuePair[] $trackingTagProperties
     * @return \Selligent\MessageStudio\NamedLink
     */
    public function setTrackingTagProperties(array $trackingTagProperties = null)
    {
      $this->trackingTagProperties = $trackingTagProperties;
      return $this;
    }

    /**
     * @return WebAnalytics
     */
    public function getWebAnalytics()
    {
      return $this->webAnalytics;
    }

    /**
     * @param WebAnalytics $webAnalytics
     * @return \Selligent\MessageStudio\NamedLink
     */
    public function setWebAnalytics($webAnalytics)
    {
      $this->webAnalytics = $webAnalytics;
      return $this;
    }

    /**
     * @return DeepLink[]
     */
    public function getDeepLinks()
    {
      return $this->deepLinks;
    }

    /**
     * @param DeepLink[] $deepLinks
     * @return \Selligent\MessageStudio\NamedLink
     */
    public function setDeepLinks(array $deepLinks = null)
    {
      $this->deepLinks = $deepLinks;
      return $this;
    }

}
