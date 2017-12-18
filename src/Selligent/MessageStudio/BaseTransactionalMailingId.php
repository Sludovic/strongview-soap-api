<?php

namespace Selligent\MessageStudio;

abstract class BaseTransactionalMailingId extends MailingId
{

    /**
     * @param string $id
     */
    public function __construct($id)
    {
      parent::__construct($id);
    }

}
