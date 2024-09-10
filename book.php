<?php

abstract class AbstractBook {
    protected string $title;
    protected string $isbn;
    protected array $authors;
    protected int $issueYear;
    protected string $annotation;
    protected int $readCount = 0;

    public function __construct(string $title, string $isbn, array $authors, int $issueYear, string $annotation) {
        $this->title = $title;
        $this->isbn = $isbn;
        $this->authors = $authors;
        $this->issueYear = $issueYear;
        $this->annotation = $annotation;
    }

    public abstract function takeBook() : string;

    public function incrementReadCount() : void {
        $this->readCount++;
    }

    public function getReadCount() : int {
        return $this->readCount;
    }
}

class PaperBook extends AbstractBook {
    private int $pagesCount;
    private string $libraryAddress;

    public function __construct(string $title, string $isbn, array $authors, int $issueYear, string $annotation, int $pagesCount, string $libraryAddress) {
        parent::__construct($title, $isbn, $authors, $issueYear, $annotation);
        $this->pagesCount = $pagesCount;
        $this->libraryAddress = $libraryAddress;
    }

    public function takeBook() : string {
        $this->incrementReadCount();
        return "You can take the book '{$this->title}' at the library located at: {$this->libraryAddress}";
    }
}

class DigitalBook extends AbstractBook {
    private string $downloadLink;

    public function __construct(string $title, string $isbn, array $authors, int $issueYear, string $annotation, string $downloadLink) {
        parent::__construct($title, $isbn, $authors, $issueYear, $annotation);
        $this->downloadLink = $downloadLink;
    }

    public function takeBook() : string {
        $this->incrementReadCount();
        return "You can download the digital book '{$this->title}' from the link: {$this->downloadLink}";
    }
}


$paperBook = new PaperBook("War and Peace", "978-3-16-148410-0", ["Lev Tolstoy"], 1869, "A classic novel.", 1225, "Library No. 5, Main St.");
echo $paperBook->takeBook();

$digitalBook = new DigitalBook("1984", "978-0-452-28423-4", ["George Orwell"], 1949, "Dystopian novel.", "https://example.com/1984");
echo $digitalBook->takeBook();
