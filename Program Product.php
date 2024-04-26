<?php
// A. Develop a class named "Product"
class Product {
    public $productID;
    public $name;
    public $price;
    public $unit;

    // constructor
    public function __construct($productID, $name, $price, $unit) {
        $this->productID = $productID;
        $this->name = $name;
        $this->price = $price;
        $this->unit = $unit;
    }

    // B. Methods for displaying product information and updating product price.
    public function displayProductInfo() {
        echo "Product ID: $this->productID, Name: $this->name, Price: $this->price, Unit: $this->unit\n";
    }

    public function updatePrice($newPrice) {
        $this->price = $newPrice;
    }
}

// C. Implement two child classes named "Book" and "Electronic"
class Book extends Product {
    public $author;
    public $ISBN;
    public $publisher;

    public function __construct($productID, $name, $price, $unit, $author, $ISBN, $publisher) {
        parent::__construct($productID, $name, $price, $unit);
        $this->author = $author;
        $this->ISBN = $ISBN;
        $this->publisher = $publisher;
    }
}

class Electronic extends Product {
    public $manufacturer;

    public function __construct($productID, $name, $price, $unit, $manufacturer) {
        parent::__construct($productID, $name, $price, $unit);
        $this->manufacturer = $manufacturer;
    }
}

// E. Instantiate objects of the Book and Electronic classes.
$book = new Book("1", "Harry Potter", "20", "pcs", "J.K. Rowling", "978-3-16-148410-0", "Bloomsbury");
$electronic = new Electronic("2", "iPhone", "1000", "pcs", "Apple");

// F. Modify the price of each product.
$book->updatePrice("25");
$electronic->updatePrice("1100");

// G. Display the product information
$book->displayProductInfo();
$electronic->displayProductInfo();
?>