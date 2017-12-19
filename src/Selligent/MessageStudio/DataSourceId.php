<?php

namespace Selligent\MessageStudio;

abstract class DataSourceId extends ObjectId
{

    /**
     * @param string $id
     */
    public function __construct($id)
    {
      parent::__construct($id);
    }

}
