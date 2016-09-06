<?php
    class JobOpening
    {
        private $title;
        private $description;
        private $contact;

        function __construct($title, $description, $contact)
        {
            $this->title = $title;
            $this->description = $description;
            $this->contact = $contact;
        }

        function setTitle($new_title)
        {
            if ($new_title) {
                $this->title = $new_title;
            }
        }

        function setDescription($new_description)
        {
            if ($new_description) {
                $this->description = $new_description;
            }
        }

        function setContact($new_contact)
        {
            if ($new_contact) {
                $this->contact = $new_contact;
            }
        }

        function getTitle()
        {
            return $this->title;
        }

        function getDescription()
        {
            return $this->description;
        }

        function getContact()
        {
            return $this->contact;
        }

        function save()
        {
            array_push($_SESSION['jobs'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_jobs'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_jobs'] = array();
        }
    }

?>
