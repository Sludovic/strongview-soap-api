<?php

namespace Selligent\MessageStudio;

class Permissions
{

    /**
     * @var RolePermissions $internalDataSources
     */
    protected $internalDataSources = null;

    /**
     * @var RolePermissions $externalDataSources
     */
    protected $externalDataSources = null;

    /**
     * @var RolePermissions $extensionDataSources
     */
    protected $extensionDataSources = null;

    /**
     * @var RolePermissions $targets
     */
    protected $targets = null;

    /**
     * @var RolePermissions $suppressionLists
     */
    protected $suppressionLists = null;

    /**
     * @var RolePermissions $seedLists
     */
    protected $seedLists = null;

    /**
     * @var RolePermissions $messageTemplates
     */
    protected $messageTemplates = null;

    /**
     * @var RolePermissions $attachments
     */
    protected $attachments = null;

    /**
     * @var RolePermissions $contentBlocks
     */
    protected $contentBlocks = null;

    /**
     * @var RolePermissions $mailings
     */
    protected $mailings = null;

    /**
     * @var RolePermissions $txMailings
     */
    protected $txMailings = null;

    /**
     * @var RolePermissions $reports
     */
    protected $reports = null;

    /**
     * @var RolePermissions $bounceAddresses
     */
    protected $bounceAddresses = null;

    /**
     * @var RolePermissions $fromAddresses
     */
    protected $fromAddresses = null;

    /**
     * @var RolePermissions $replyAddresses
     */
    protected $replyAddresses = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RolePermissions
     */
    public function getInternalDataSources()
    {
      return $this->internalDataSources;
    }

    /**
     * @param RolePermissions $internalDataSources
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setInternalDataSources($internalDataSources)
    {
      $this->internalDataSources = $internalDataSources;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getExternalDataSources()
    {
      return $this->externalDataSources;
    }

    /**
     * @param RolePermissions $externalDataSources
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setExternalDataSources($externalDataSources)
    {
      $this->externalDataSources = $externalDataSources;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getExtensionDataSources()
    {
      return $this->extensionDataSources;
    }

    /**
     * @param RolePermissions $extensionDataSources
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setExtensionDataSources($extensionDataSources)
    {
      $this->extensionDataSources = $extensionDataSources;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getTargets()
    {
      return $this->targets;
    }

    /**
     * @param RolePermissions $targets
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setTargets($targets)
    {
      $this->targets = $targets;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getSuppressionLists()
    {
      return $this->suppressionLists;
    }

    /**
     * @param RolePermissions $suppressionLists
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setSuppressionLists($suppressionLists)
    {
      $this->suppressionLists = $suppressionLists;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getSeedLists()
    {
      return $this->seedLists;
    }

    /**
     * @param RolePermissions $seedLists
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setSeedLists($seedLists)
    {
      $this->seedLists = $seedLists;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getMessageTemplates()
    {
      return $this->messageTemplates;
    }

    /**
     * @param RolePermissions $messageTemplates
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setMessageTemplates($messageTemplates)
    {
      $this->messageTemplates = $messageTemplates;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getAttachments()
    {
      return $this->attachments;
    }

    /**
     * @param RolePermissions $attachments
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setAttachments($attachments)
    {
      $this->attachments = $attachments;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getContentBlocks()
    {
      return $this->contentBlocks;
    }

    /**
     * @param RolePermissions $contentBlocks
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setContentBlocks($contentBlocks)
    {
      $this->contentBlocks = $contentBlocks;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getMailings()
    {
      return $this->mailings;
    }

    /**
     * @param RolePermissions $mailings
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setMailings($mailings)
    {
      $this->mailings = $mailings;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getTxMailings()
    {
      return $this->txMailings;
    }

    /**
     * @param RolePermissions $txMailings
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setTxMailings($txMailings)
    {
      $this->txMailings = $txMailings;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getReports()
    {
      return $this->reports;
    }

    /**
     * @param RolePermissions $reports
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setReports($reports)
    {
      $this->reports = $reports;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getBounceAddresses()
    {
      return $this->bounceAddresses;
    }

    /**
     * @param RolePermissions $bounceAddresses
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setBounceAddresses($bounceAddresses)
    {
      $this->bounceAddresses = $bounceAddresses;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getFromAddresses()
    {
      return $this->fromAddresses;
    }

    /**
     * @param RolePermissions $fromAddresses
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setFromAddresses($fromAddresses)
    {
      $this->fromAddresses = $fromAddresses;
      return $this;
    }

    /**
     * @return RolePermissions
     */
    public function getReplyAddresses()
    {
      return $this->replyAddresses;
    }

    /**
     * @param RolePermissions $replyAddresses
     * @return \Selligent\MessageStudio\Permissions
     */
    public function setReplyAddresses($replyAddresses)
    {
      $this->replyAddresses = $replyAddresses;
      return $this;
    }

}
