<?php

namespace Selligent\MessageStudio;

abstract class BaseTemplateId extends ObjectId
{

    /**
     * @param string $id
     */
    public function __construct($id)
    {
      parent::__construct($id);
    }

}
