<?php


class Person
{
    private string $name;
    private string $address;

    public function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function __toString(): string
    {
        return "Person [name={$this->name}, address={$this->address}]";
    }
}

class Student extends Person
{
    private string $program;
    private int $year;
    private float $fee;

    public function __construct(string $name, string $address, string $program, int $year, float $fee)
    {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram(): string
    {
        return $this->program;
    }

    public function setProgram(string $program): void
    {
        $this->program = $program;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getFee(): float
    {
        return $this->fee;
    }

    public function setFee(float $fee): void
    {
        $this->fee = $fee;
    }

    public function __toString(): string
    {
        $parentString = parent::__toString();
        return "Student [{$parentString}, program={$this->program}, year={$this->year}, fee={$this->fee}]";
    }
}

class Staff extends Person
{
    private string $school;
    private float $pay;

    public function __construct(string $name, string $address, string $school, float $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getSchool(): string
    {
        return $this->school;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    public function getPay(): float
    {
        return $this->pay;
    }

    public function setPay(float $pay): void
    {
        $this->pay = $pay;
    }

    public function __toString(): string
    {
        $parentString = parent::__toString();
        return "Staff [{$parentString}, school={$this->school}, pay={$this->pay}]";
    }
}



$person = new Person("taha riyad", "6th of october"). "<br>";
echo $person ;

$student = new Student("mostafa askar", "EL-dokki", "Computer Science", 2, 5000.0). "<br>";
echo $student ;

$staff = new Staff("mohamed gika", "Giza goverment", "High School", 4000.0). "<br>";
echo $staff ;
