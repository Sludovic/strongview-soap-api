<?php

namespace Selligent\MessageStudio;

class schedule
{

    /**
     * @var \DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var recurrence $recurrence
     */
    protected $recurrence = null;

    /**
     * @param \DateTime $startDateTime
     * @param recurrence $recurrence
     */
    public function __construct(\DateTime $startDateTime, $recurrence)
    {
      $this->startDateTime = $startDateTime->format(\DateTime::ATOM);
      $this->recurrence = $recurrence;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
      if ($this->startDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDateTime
     * @return \Selligent\MessageStudio\schedule
     */
    public function setStartDateTime(\DateTime $startDateTime)
    {
      $this->startDateTime = $startDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return recurrence
     */
    public function getRecurrence()
    {
      return $this->recurrence;
    }

    /**
     * @param recurrence $recurrence
     * @return \Selligent\MessageStudio\schedule
     */
    public function setRecurrence($recurrence)
    {
      $this->recurrence = $recurrence;
      return $this;
    }

}
