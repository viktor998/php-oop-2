<?php

    class CreditCard {
        private $card_holder;
        private $number;
        private $date;
        private $security_code;


        public function __construct($card_holder, $number, $date, $security_code){
            $this->card_holder = $card_holder;
            $this->number = $number;
            $this->date = $date;
            $this->security_code = $security_code;

        }


        public function setCardHolder($card_holder){
            $this->card_holder = $card_holder;
        }

        public function getCardHolder(){
            return $this->card_holder;
        }

        public function setNumber($number){
            $this->number = $number;
        }

        public function getNumber(){
            return $this->number;
        }

        public function setDate($date){
            $this->date = $date;
        }

        public function getDate(){
            return $this->date;
        }

        public function setSecurityCode($security_code){
            $this->security_code = $security_code;
        }

        public function getSecurityCode(){
            return $this->security_code;
        }
    }
?>