<?php

namespace Selligent\MessageStudio;

class TransactionalMailingId extends BaseTransactionalMailingId
{

    /**
     * @param string $id
     */
    public function __construct($id)
    {
      parent::__construct($id);
    }

}
