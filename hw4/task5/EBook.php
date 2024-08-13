<?php

require_once("AbstractBook.php");

class EBook extends AbstractBook {
    function checkoutBook() {
        echo "https://www.checkoutwebsite.com";
    }
}