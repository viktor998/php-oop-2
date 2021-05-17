<?php
    trait Address{
       protected $nationality;
       protected $city;
       protected $zip_code;
       protected $street;

       public function __construct($nationality, $city, $zip_code, $street){
            $this->nationality = $nationality;
            $this->city = $city;
            $this->zip_code = $zip_code;
            $this->street = $street;
        }


        public function setNationality($nationality){
            $this->nationality = $nationality;
        }

        public function getNationality(){
            return $this->nationality;
        }

        public function setCity($city){
            $this->city = $city;
        }

        public function getCity(){
            return $this->city;
        }

        public function setZipCode($zip_code){
            $this->zip_code = $zip_code;
        }

        public function getZipCode(){
            return $this->zip_code;
        }

        public function setStreet($street){
            $this->street = $street;
        }

        public function getStreet(){
            return $this->street;
        }
    }
?>