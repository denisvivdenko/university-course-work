<?php
// Singleton pattern
class Singleton
{
    private static $instance;
    private $data;

    private function __construct()
    {
        $this->data = [];
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function setData($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function getData($key)
    {
        return $this->data[$key];
    }
}

// Creating a singleton instance
$singleton = Singleton::getInstance();

// Hash map example
$singleton->setData('name', 'John');
$singleton->setData('age', 25);
$singleton->setData('city', 'New York');

// Accessing data from the singleton instance
echo "Name: " . $singleton->getData('name') . "<br>";
echo "Age: " . $singleton->getData('age') . "<br>";
echo "City: " . $singleton->getData('city') . "<br>";

// Foreach loop example
$fruits = ['Apple', 'Banana', 'Orange'];

echo "Fruits:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// For loop example
echo "Counting from 1 to 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// Class and inheritance example
class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . " is barking.<br>";
    }
}

// Creating objects
$animal = new Animal("Generic Animal");
$dog = new Dog("Tommy");

// Calling methods
$animal->eat();
$dog->eat();
$dog->bark();
?>