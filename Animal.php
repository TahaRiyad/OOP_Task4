<?php


class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function introduce(): string
    {
        return "I am an Animal named {$this->name}";
    }
}

class Mammal extends Animal
{
    public function greet(): string
    {
        return "Hello, I'm a Mammal named {$this->name}";
    }
}

class Cat extends Mammal
{
    public function meow(): string
    {
        return "Meow!";
    }

    public function introduce(): string
    {
        return parent::introduce() . " and I'm a Cat";
    }
}

class Dog extends Mammal
{
    public function bark(bool $loud = false): string
    {
        return ($loud ? "Wooooooof " : "Woof!");
    }

    public function introduce(): string
    {
        return parent::introduce() . " and I'm a Dog";
    }
}



$animal = new Animal("Generic Animal");
echo $animal->introduce() . "<br>";

$mammal = new Mammal("Mammal");
echo $mammal->greet() . "<br>";

$cat = new Cat("Whiskers");
echo $cat->introduce() . "<br>";
echo $cat->meow() . "<br>";

$dog1 = new Dog("Fido");
echo $dog1->introduce() . "<br>";
echo $dog1->bark() . "<br>";

$dog2 = new Dog("Buddy");
echo $dog2->introduce() . "<br>";
echo $dog2->bark(true) . "<br>";
