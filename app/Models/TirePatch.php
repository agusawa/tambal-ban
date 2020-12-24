<?php
 
require __DIR__ . "/../Core/Model.php";
 
if (!class_exists("TirePatch")) {
    class TirePatch extends Model
    {
        /**
         * @var int
         */
        protected $id;
 
        /**
         * @var int
         */
        protected $userId;
 
        /**
         * @var string
         */
        protected $name;
 
        /**
         * @var string
         */
        protected $address;
 
        /**
         * @var string
         */
        protected $description;
 
        /**
         * @var string
         */
        protected $picture;
 
        /**
         * @var string
         */
        protected $whatsappNumber;
 
        /**
         * @var string
         */
        protected $available;
 
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
 
        public function getUserId()
        {
            return $this->userId;
        }
 
        public function getName()
        {
            return $this->name;
        }
 
        public function getAddress()
        {
            return $this->address;
        }
 
        public function getDescription()
        {
            return $this->description;
        }
 
        public function getPicture()
        {
            return $this->picture;
        }
 
        public function getWhatsappNumber()
        {
            return $this->whatsappNumber;
        }
 
        public function getAvailable()
        {
            return $this->available;
        }
 
        public function getCreated()
        {
            return $this->created;
        }
 
        public function getModified()
        {
            return $this->modified;
        }
 
        public function setUserId($userId)
        {
            $this->userId = $userId;
        }
 
        public function setName($name)
        {
            $this->name = $name;
        }
 
        public function setAddress($address)
        {
            $this->address = $address;
        }
 
        public function setDescription($description)
        {
            $this->description = $description;
        }
 
        public function setPicture($picture)
        {
            $this->picture = $picture;
        }
 
        public function setWhatsappNumber($whatsappNumber)
        {
            $this->whatsappNumber = $whatsappNumber;
        }
 
        public function setAvailable($available)
        {
            $this->available = $available;
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
}