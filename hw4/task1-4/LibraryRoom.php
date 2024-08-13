<?php 

require_once("Room.php");

class LibraryRoom extends Room
{
    private int $books;
    
    function __construct(int $walls, int $windows, string $wallColor, array $furniture, int $books) {
        $this->$walls = $walls;
        $this->$windows = $windows;
        $this->$wallColor = $wallColor;
        $this->$furniture = $furniture;
        $this->$books = $books;
    }

    function getBooks() : int {
        return $this->$books;
    }

    function setBooks($books) {
        $this->$books = $books;
    }

    function readBook() {
        echo "Reading...";
    }
}
