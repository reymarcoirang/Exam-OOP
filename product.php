<?php
    Class Product {
        private $name;
        private $description;
        private $price;
        private $srp;

        function setName($name){
            $this->name = $name;
        }
        function setDescription($description){
            $this->description = $description;
        }
        function setPrice($price){
            $this->price = $price;
        }

        function getName(){
            echo $this->name;
        }
        function getDescription(){
            echo $this->description;
        }
        function getPrice(){
            echo $this->price;
        }
        function computerSRP(){
            echo ($this->price * 1.5);
        }
    
    }

?>