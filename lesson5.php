<?php

// Базовый класс
class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Подкласс Circle (Круг)
class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name); // Вызов конструктора родителя
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Подкласс Rectangle (Прямоугольник)
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $width, $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Тестирование
$circle1 = new Circle("Окружность 1", 5);
$circle2 = new Circle("Окружность 2", 3.2);

$rect1 = new Rectangle("Прямоугольник 1", 4, 6);
$rect2 = new Rectangle("Прямоугольник 2", 10, 2.5);

// Вывод результатов
$figures = [$circle1, $circle2, $rect1, $rect2];

foreach ($figures as $figure) {
    echo "Фигура: " . $figure->getName() . "<br>";
    echo "Площадь: " . round($figure->calculateArea(), 2) . "<br><br>";
}

?>
