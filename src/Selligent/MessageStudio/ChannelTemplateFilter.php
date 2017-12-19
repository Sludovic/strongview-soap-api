<?php

namespace Selligent\MessageStudio;

class ChannelTemplateFilter extends TemplateFilter
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
     * @return \Selligent\MessageStudio\ChannelTemplateFilter
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
     * @return \Selligent\MessageStudio\ChannelTemplateFilter
     */
    public function setExcludeInOperativeChannel($excludeInOperativeChannel)
    {
      $this->excludeInOperativeChannel = $excludeInOperativeChannel;
      return $this;
    }

}
