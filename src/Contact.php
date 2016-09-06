<?php
    class Contact
    {
        private $name;
        private $phone;
        private $address;
        function __construct($name, $phone, $address)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
        }
        function setName($new_name)
        {
            if($new_name){
                $this->name = $new_name;
            }
        }
        function setPhone($new_phone)
        {
            if($new_phone){
                $this->phone = $new_phone;
            }
        }
        function setAddress($new_address)
        {
            if($new_address){
                $this->address = $new_address;
            }
        }
        function getName()
        {
            return $this->name;
        }
        function getPhone()
        {
            return $this->phone;
        }
        function getAddress()
        {
            return $this->address;
        }
    }

 ?>
