<?php

// Абстрактный класс
abstract class Vehicle {
    abstract public function start();
    abstract public function stop();
}

// Класс Car (Автомобиль)
class Car extends Vehicle {
    public function start() {
        echo "Автомобиль заведен<br>";
    }

    public function stop() {
        echo "Автомобиль заглушен<br>";
    }
}

// Класс Bicycle (Велосипед)
class Bicycle extends Vehicle {
    public function start() {
        echo "Велосипед начал движение<br>";
    }

    public function stop() {
        echo "Велосипед остановился<br>";
    }
}

// Тестирование
$car = new Car();
$bicycle = new Bicycle();

echo "<strong>Car:</strong><br>";
$car->start();
$car->stop();

echo "<br><strong>Bicycle:</strong><br>";
$bicycle->start();
$bicycle->stop();
