<?php

abstract class AbstractBook {
    private string $title;
    private string $isbn;
    private array $authors;
    private int $issueYear;
    private string $annotation;

    public abstract function takeBook(string $title) : AbstractBook;
}

class Book extends AbstractBook{
    private int $pagesCount;
    private int $shelfId;

    public function takeBook(string $title) : Book {

    }

    public function returnBook(string $title) : bool {

    }

    public function removeBook(string $title) : bool {

    }

    public function addBook(string $title, string $isbn, array $authors, int $pages, int $issueYear) : bool {

    }

    public function placeBookInShelf(Shelf $shelf) : bool {

    }
}

class DigitalBook extends AbstractBook {
    private string $link;
    private string $text;

    public function takeBook(string $title) : DigitalBook {

    }
}