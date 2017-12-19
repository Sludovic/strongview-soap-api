<?php

namespace Selligent\MessageStudio;

class SeedListId extends ObjectId
{

    /**
     * @param string $id
     */
    public function __construct($id)
    {
      parent::__construct($id);
    }

}
