<?php
    require_once "medicine.php";
    require_once "product.php";

    class cart extends Medicine{
        private $cartItems = array ();

        function addTocart($item){
            $this->cartItems[] = $item;
        }
        function viewCart(){
            $arrCartItems = $this->cartItems;
            foreach ($arrCartItems as $key => $item){
                echo
                '
                <ul>
                    <li>Name: ' . $item->getName() . '</li>
                    <li>Description: ' . $item->getDescription() . '</li>
                    <li>Price:  ₱ ' . number_format($item->getPrice(), 2) . '</li>
                    <li>Dose: ' . $item->getDose() . '</li>
                    <li>Type: ' . $item->getType() . '</li>
                    <li>Exp Date: ' . $item->getExpirationDate() . '</li>
                    <li>SRP: ' . $item->computeSRP() . '</li>
                </ul>
                <hr>'; 
            }
        }
        function computeTotal(){
            $total = 0;
            foreach($this->cartItems as $key => $item){
                $totalprice += $Value->computeSRP();
            }
            echo '<b>Total Cart Amount: </b>  ₱ ' . number_format($total,2);
        }
    }















?>