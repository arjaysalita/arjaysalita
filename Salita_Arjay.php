<?php

// Parent class Animal
class Animal {
    protected $species;
    protected $habitat;
    protected $diet;

    public function __construct($species, $habitat, $diet) {
        $this->species = $species;
        $this->habitat = $habitat;
        $this->diet = $diet;
    }

    public function getSpecies() {
        return $this->species;
    }

    public function setSpecies($species) {
        $this->species = $species;
    }

    public function getHabitat() {
        return $this->habitat;
    }

    public function setHabitat($habitat) {
        $this->habitat = $habitat;
    }

    public function getDiet() {
        return $this->diet;
    }

    public function setDiet($diet) {
        $this->diet = $diet;
    }

    public function makeSound() {
        echo "Animal sound\n";
    }
}

// Child class Mammal
class Mammal extends Animal {
    private $furColor;
    private $numberOfLegs;
    private $isWarmBlooded;

    public function __construct($species, $habitat, $diet, $furColor, $numberOfLegs, $isWarmBlooded) {
        parent::__construct($species, $habitat, $diet);
        $this->furColor = $furColor;
        $this->numberOfLegs = $numberOfLegs;
        $this->isWarmBlooded = $isWarmBlooded;
    }

    public function getFurColor() {
        return $this->furColor;
    }

    public function setFurColor($furColor) {
        $this->furColor = $furColor;
    }

    public function getNumberOfLegs() {
        return $this->numberOfLegs;
    }

    public function setNumberOfLegs($numberOfLegs) {
        $this->numberOfLegs = $numberOfLegs;
    }

    public function getIsWarmBlooded() {
        return $this->isWarmBlooded;
    }

    public function setIsWarmBlooded($isWarmBlooded) {
        $this->isWarmBlooded = $isWarmBlooded;
    }

    public function makeSound() {
        echo "Mammal sound\n";
    }
}

// Child class Bird
class Bird extends Animal {
    private $wingSpan;
    private $canFly;
    private $beakLength;

    public function __construct($species, $habitat, $diet, $wingSpan, $canFly, $beakLength) {
        parent::__construct($species, $habitat, $diet);
        $this->wingSpan = $wingSpan;
        $this->canFly = $canFly;
        $this->beakLength = $beakLength;
    }

    public function getWingSpan() {
        return $this->wingSpan;
    }

    public function setWingSpan($wingSpan) {
        $this->wingSpan = $wingSpan;
    }

    public function getCanFly() {
        return $this->canFly;
    }

    public function setCanFly($canFly) {
        $this->canFly = $canFly;
    }

    public function getBeakLength() {
        return $this->beakLength;
    }

    public function setBeakLength($beakLength) {
        $this->beakLength = $beakLength;
    }

    public function makeSound() {
        echo "Bird sound\n";
    }
}

// Instantiate objects of Mammal and Bird classes
$mammal = new Mammal("Tiger", "Jungle", "Carnivore", "Orange", 4, true);
$bird = new Bird("Eagle", "Mountains", "Carnivore", 2, true, "Long");

// Assign values to the properties of the instances using setter methods
$mammal->setSpecies("Lion");
$mammal->setHabitat("Grasslands");
$mammal->setDiet("Carnivore");

$bird->setSpecies("Falcon");
$bird->setHabitat("Desert");
$bird->setDiet("Carnivore");

// Display the information for every instance
echo "Mammal Information:\n";
echo "Species: " . $mammal->getSpecies() . "\n";
echo "Habitat: " . $mammal->getHabitat() . "\n";
echo "Diet: " . $mammal->getDiet() . "\n";
echo "Fur Color: " . $mammal->getFurColor() . "\n";
echo "Number of Legs: " . $mammal->getNumberOfLegs() . "\n";
echo "Warm-Blooded: " . ($mammal->getIsWarmBlooded() ? "Yes" : "No") . "\n";
$mammal->makeSound();

echo "\nBird Information:\n";
echo "Species: " . $bird->getSpecies() . "\n";
echo "Habitat: " . $bird->getHabitat() . "\n";
echo "Diet: " . $bird->getDiet() . "\n";
echo "Wing Span: " . $bird->getWingSpan() . "\n";
echo "Can Fly: " . ($bird->getCanFly() ? "Yes" : "No") . "\n";
echo "Beak Length: " . $bird->getBeakLength() . "\n";
$bird->makeSound();

?>















