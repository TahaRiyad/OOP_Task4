<?php

abstract class Shape
{
    protected string $color;
    protected bool $filled;

    public function __construct(string $color = "unknown", bool $filled = false)
    {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function isFilled(): bool
    {
        return $this->filled;
    }

    public function setFilled(bool $filled): void
    {
        $this->filled = $filled;
    }

    abstract public function getArea(): float;

    abstract public function getPerimeter(): float;

    public function toString(): string
    {
        return "Shape[color={$this->color}, filled={$this->filled}]";
    }
}

class Circle extends Shape
{
    private float $radius;

    public function __construct(float $radius = 1.0, string $color = "unknown", bool $filled = false)
    {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }

    public function toString(): string
    {
        return "Circle[" . parent::toString() . ", radius={$this->radius}]";
    }
}

class Rectangle extends Shape
{
    private float $width;
    private float $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "unknown", bool $filled = false)
    {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    public function getArea(): float
    {
        return $this->length * $this->width;
    }

    public function getPerimeter(): float
    {
        return 2 * ($this->length + $this->width);
    }

    public function toString(): string
    {
        return "Rectangle[" . parent::toString() . ", width={$this->width}, length={$this->length}]";
    }
}

class Square extends Rectangle
{
    public function __construct(float $side = 1.0, string $color = "unknown", bool $filled = false)
    {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float
    {
        return parent::getLength();
    }

    public function setSide(float $side): void
    {
        parent::setWidth($side);
        parent::setLength($side);
    }

    public function toString(): string
    {
        return "Square[" . parent::toString() . ", width={$this->getSide()}, length={$this->getSide()}]";
    }
}


$circle = new Circle(5, "red", true);
echo $circle->toString() . "<br>";

$rectangle = new Rectangle(4, 6, "blue", false);
echo $rectangle->toString() . "<br>";

$square = new Square(3, "green", true);
echo $square->toString() . "<br>";
?>
