<?php

namespace Selligent\MessageStudio;

class ChannelMailingFilter extends MailingFilter
{

    /**
     * @var ScalarIdFilterCondition $channelIdCondition
     */
    protected $channelIdCondition = null;

    /**
     * @var ScalarBooleanFilterCondition $excludeInOperativeChannel
     */
    protected $excludeInOperativeChannel = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ScalarIdFilterCondition
     */
    public function getChannelIdCondition()
    {
      return $this->channelIdCondition;
    }

    /**
     * @param ScalarIdFilterCondition $channelIdCondition
     * @return \Selligent\MessageStudio\ChannelMailingFilter
     */
    public function setChannelIdCondition($channelIdCondition)
    {
      $this->channelIdCondition = $channelIdCondition;
      return $this;
    }

    /**
     * @return ScalarBooleanFilterCondition
     */
    public function getExcludeInOperativeChannel()
    {
      return $this->excludeInOperativeChannel;
    }

    /**
     * @param ScalarBooleanFilterCondition $excludeInOperativeChannel
     * @return \Selligent\MessageStudio\ChannelMailingFilter
     */
    public function setExcludeInOperativeChannel($excludeInOperativeChannel)
    {
      $this->excludeInOperativeChannel = $excludeInOperativeChannel;
      return $this;
    }

}
