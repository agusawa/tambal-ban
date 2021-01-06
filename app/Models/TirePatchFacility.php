<?php

require_once __DIR__ . "/../Core/Model.php";

class TirePatchFacility
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $tirePatchId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $created;

    /**
     * @var int
     */
    protected $modified;

    public function getId()
    {
        return $this->id;
    }

    public function getTirePatchId()
    {
        return $this->tirePatchId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getModified()
    {
        return $this->modified;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTirePatchId($tirePatchId)
    {
        $this->tirePatchId = $tirePatchId;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function setModified($modified)
    {
        $this->modified = $modified;
    }
}
