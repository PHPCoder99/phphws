<?php

abstract class Book {
    protected string $name;
    protected string $author;
    protected DateTime $publishDate;

    function __construct(string $name, string $author, DateTime $publishDate) {
        $this->$name = $name;
        $this->$author = $author;
        $this->$publishDate = $publishDate;
    }

    abstract function checkoutBook();

}