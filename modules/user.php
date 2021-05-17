<?php
    require_once 'address.php';
    class User {
        use Address;
        private $name;
        private $surname;
        private $birth_date;

        
        public function __construct($name, $surname, $birth_date, $nationality, $city, $zip_code, $street){
            $this->name = $name;
            $this->surname = $surname;
            $this->birth_date = $birth_date;
            $this->nationality = $nationality;
            $this->city = $city;
            $this->zip_code = $zip_code;
            $this->street = $street;
        }


        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setSurname($surname){
            $this->surname = $surname;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function setAddress($address){
            $this->address = $address;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setBirthDate($birth_date){
            $this->birth_date = $birth_date;
        }

        public function getBirthDate(){
            return $this->birth_date;
        }
    }
?>