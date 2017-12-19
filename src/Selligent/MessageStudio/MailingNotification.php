<?php

namespace Selligent\MessageStudio;

class MailingNotification
{

    /**
     * @var string[] $recipientAddresses
     */
    protected $recipientAddresses = null;

    /**
     * @var boolean $notifyStateChange
     */
    protected $notifyStateChange = null;

    /**
     * @param boolean $notifyStateChange
     */
    public function __construct($notifyStateChange)
    {
      $this->notifyStateChange = $notifyStateChange;
    }

    /**
     * @return string[]
     */
    public function getRecipientAddresses()
    {
      return $this->recipientAddresses;
    }

    /**
     * @param string[] $recipientAddresses
     * @return \Selligent\MessageStudio\MailingNotification
     */
    public function setRecipientAddresses(array $recipientAddresses = null)
    {
      $this->recipientAddresses = $recipientAddresses;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotifyStateChange()
    {
      return $this->notifyStateChange;
    }

    /**
     * @param boolean $notifyStateChange
     * @return \Selligent\MessageStudio\MailingNotification
     */
    public function setNotifyStateChange($notifyStateChange)
    {
      $this->notifyStateChange = $notifyStateChange;
      return $this;
    }

}
