<?php

namespace thepixelage\SharpSpring\models;

class Field
{
    private $id;
    private $relationship;
    private $systemName;
    private $label;
    private $source;
    private $dataType;
    private $dataLength;
    private $isRequired;
    private $isCustom;
    private $isActive;
    private $isAvailableInContactManager;
    private $isEditableInContactManager;
    private $isAvailableInForms;

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
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param mixed $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @return mixed
     */
    public function getSystemName()
    {
        return $this->systemName;
    }

    /**
     * @param mixed $systemName
     */
    public function setSystemName($systemName)
    {
        $this->systemName = $systemName;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param mixed $dataType
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
    }

    /**
     * @return mixed
     */
    public function getDataLength()
    {
        return $this->dataLength;
    }

    /**
     * @param mixed $dataLength
     */
    public function setDataLength($dataLength)
    {
        $this->dataLength = $dataLength;
    }

    /**
     * @return mixed
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * @param mixed $isRequired
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
    }

    /**
     * @return mixed
     */
    public function getIsCustom()
    {
        return $this->isCustom;
    }

    /**
     * @param mixed $isCustom
     */
    public function setIsCustom($isCustom)
    {
        $this->isCustom = $isCustom;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return mixed
     */
    public function getIsAvailableInContactManager()
    {
        return $this->isAvailableInContactManager;
    }

    /**
     * @param mixed $isAvailableInContactManager
     */
    public function setIsAvailableInContactManager($isAvailableInContactManager)
    {
        $this->isAvailableInContactManager = $isAvailableInContactManager;
    }

    /**
     * @return mixed
     */
    public function getIsEditableInContactManager()
    {
        return $this->isEditableInContactManager;
    }

    /**
     * @param mixed $isEditableInContactManager
     */
    public function setIsEditableInContactManager($isEditableInContactManager)
    {
        $this->isEditableInContactManager = $isEditableInContactManager;
    }

    /**
     * @return mixed
     */
    public function getIsAvailableInForms()
    {
        return $this->isAvailableInForms;
    }

    /**
     * @param mixed $isAvailableInForm
     */
    public function setIsAvailableInForms($isAvailableInForms)
    {
        $this->isAvailableInForms = $isAvailableInForms;
    }
}