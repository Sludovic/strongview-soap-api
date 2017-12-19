<?php

namespace Selligent\MessageStudio;

class StandardMailingNotification extends MailingNotification
{

    /**
     * @var boolean $notifyTargetingCompletion
     */
    protected $notifyTargetingCompletion = null;

    /**
     * @param boolean $notifyStateChange
     * @param boolean $notifyTargetingCompletion
     */
    public function __construct($notifyStateChange, $notifyTargetingCompletion)
    {
      parent::__construct($notifyStateChange);
      $this->notifyTargetingCompletion = $notifyTargetingCompletion;
    }

    /**
     * @return boolean
     */
    public function getNotifyTargetingCompletion()
    {
      return $this->notifyTargetingCompletion;
    }

    /**
     * @param boolean $notifyTargetingCompletion
     * @return \Selligent\MessageStudio\StandardMailingNotification
     */
    public function setNotifyTargetingCompletion($notifyTargetingCompletion)
    {
      $this->notifyTargetingCompletion = $notifyTargetingCompletion;
      return $this;
    }

}
