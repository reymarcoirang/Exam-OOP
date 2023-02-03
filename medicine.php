<?php
    require_once "product.php";

    class Medicine extends product{
        private $dose;
        private $type;
        private $expirationDate;

        function setDose($dose){
            $this->dose = $dose;
        }
        function setType($type){
            $this->type = $type;
        }
        function setExpirationDate($expirationDate){
            $this->expirationDate = $expirationDate; 
        }

        function getDose($dose){
          echo $this->dose = $dose;
        }
        function getType($type){
          return $this->type;
        }
        function getExpirationDate(){
           return $this->expirationDate;
        }

        function computeSRP(){
           return $this->getprice() * 2;
        }
    }
?>