<?php

require_once("AbstractBook.php");

class EBook extends AbstractBook {
    function checkoutBook() {
        echo "1 2 3 Пушкинская улица";
    }
}