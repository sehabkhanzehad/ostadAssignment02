<?php
class Book {
    //  Private Properties
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Title
    public function getTitle() {
        return $this->title;
    }

    // Available Copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Brrrow Book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            // echo "Book '{$this->title}' borrowed.\n";
        } else {
            // echo "Sorry, '{$this->title}' is not available.\n";
        }
    }

    // Return Book
    public function returnBook() {
        $this->availableCopies++;
        // echo "Book '{$this->title}' returned.\n";
    }
}
class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Name
    public function getName() {
        return $this->name;
    }

    // Borrow Book
    public function borrowBook($book) {
        // echo "{$this->name} is borrowing '{$book->getTitle()}'.\n";
        $book->borrowBook();
    }

    // Return Book
    public function returnBook($book) {
        // echo "{$this->name} is returning '{$book->getTitle()}'.\n";
        // $book->returnBook();
    }
}

// Usage
// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print Available Copies with their names
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
