<?php

namespace Selligent\MessageStudio;

abstract class BaseStandardMailingId extends MailingId
{

    /**
     * @param string $id
     */
    public function __construct($id)
    {
      parent::__construct($id);
    }

}
