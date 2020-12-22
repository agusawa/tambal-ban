<?php

if (!class_exists("User")) {
    class User
    {
        /**
         * @var int
         */
        protected $id;

        /**
         * @var string
         */
        protected $name;

        /**
         * @var string
         */
        protected $email;

        /**
         * @var string
         */
        protected $password;

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

        public function getName()
        {
            return $this->name;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function getCreated()
        {
            return $this->created;
        }

        public function getModified()
        {
            return $this->modified;
        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function setPassword($password)
        {
            $this->password = $password;
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
