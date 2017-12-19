<?php

namespace Selligent\MessageStudio;

class DatabaseImport extends RecurringImport
{

    /**
     * @var ExternalDataSourceId $importFrom
     */
    protected $importFrom = null;

    /**
     * @param string $name
     * @param InternalDataSourceId $importTo
     * @param ExternalDataSourceId $importFrom
     */
    public function __construct($name, $importTo, $importFrom)
    {
      parent::__construct($name, $importTo);
      $this->importFrom = $importFrom;
    }

    /**
     * @return ExternalDataSourceId
     */
    public function getImportFrom()
    {
      return $this->importFrom;
    }

    /**
     * @param ExternalDataSourceId $importFrom
     * @return \Selligent\MessageStudio\DatabaseImport
     */
    public function setImportFrom($importFrom)
    {
      $this->importFrom = $importFrom;
      return $this;
    }

}
