<?php

namespace thepixelage\SharpSpring\models;

class Event
{
    private $id;
    private $leadId;
    private $eventName;
    private $whatId;
    private $whatType;
    private $eventData;
    private $eventSource;
    private $createTimestamp;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * @param mixed $leadId
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;
    }

    /**
     * @return mixed
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param mixed $eventName
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return mixed
     */
    public function getWhatId()
    {
        return $this->whatId;
    }

    /**
     * @param mixed $whatId
     */
    public function setWhatId($whatId)
    {
        $this->whatId = $whatId;
    }

    /**
     * @return mixed
     */
    public function getWhatType()
    {
        return $this->whatType;
    }

    /**
     * @param mixed $whatType
     */
    public function setWhatType($whatType)
    {
        $this->whatType = $whatType;
    }

    /**
     * @return mixed
     */
    public function getEventData()
    {
        return $this->eventData;
    }

    /**
     * @param mixed $eventData
     */
    public function setEventData($eventData)
    {
        $this->eventData = $eventData;
    }

    /**
     * @return mixed
     */
    public function getEventSource()
    {
        return $this->eventSource;
    }

    /**
     * @param mixed $eventSource
     */
    public function setEventSource($eventSource)
    {
        $this->eventSource = $eventSource;
    }

    /**
     * @return mixed
     */
    public function getCreateTimestamp()
    {
        return $this->createTimestamp;
    }

    /**
     * @param mixed $createTimestamp
     */
    public function setCreateTimestamp($createTimestamp)
    {
        $this->createTimestamp = $createTimestamp;
    }
}