<?php

namespace Selligent\MessageStudio;

class GetISFieldsResponse extends GetRecordsResponse
{

    /**
     * @var InteractionField[] $interactionField
     */
    protected $interactionField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InteractionField[]
     */
    public function getInteractionField()
    {
      return $this->interactionField;
    }

    /**
     * @param InteractionField[] $interactionField
     * @return \Selligent\MessageStudio\GetISFieldsResponse
     */
    public function setInteractionField(array $interactionField = null)
    {
      $this->interactionField = $interactionField;
      return $this;
    }

}
