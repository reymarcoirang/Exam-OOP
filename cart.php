<?php
    require_once "medicine.php";
    require_once "product.php";

    class cart extends Medicine{
        private $cartItems = array ();

        function addTocart($item){
            $this->cartItems[] = $items;
        }
        function viewCart(){
            $arrCartItems = $this->cartItems;
            foreach ($arrCartItems as $key => $items){
                echo
                '<ul>
                    <li>Name: ' . $Item->getName() . '</li>
                    <li>Description: ' . $Item->getDescription() . '</li>
                    <li>Price: ' . number_format($item->getPrice(), 2) . '</li>
                    <li>Dose: ' . $Item->getDose() . '</li>
                    <li>Type: ' . $Item->getType() . '</li>
                    <li>Exp Date: ' . $Item->getExpirationDate() . '</li>
                    <li>SRP: ' . $Item->computeSRP() . '</li>
                </ul>'
                '<hr>'; 
            }
        }
        function computeTotal(){
            $total = 0;
            foreach($this->cartItems as $key => $item){
                $totalprice += $Value->computeSRP();
            }
            echo '<b>Total Cart Amount: </b> ' . number_format($total,2);
        }
    }















?>