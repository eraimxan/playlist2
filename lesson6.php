<?php

class Car {
    private $brand;     // приватное свойство
    public $model;      // публичное свойство
    protected $year;    // защищённое свойство

    // Конструктор
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    // Метод для вывода всей информации
    public function getInfo() {
        return "Марка: {$this->brand}, Модель: {$this->model}, Год: {$this->year}";
    }
}

// Создание объекта
$car = new Car("Toyota", "Camry", 2020);

// Попробуем обратиться к свойствам извне
echo $car->model . "<br>";         //  Публичное — доступно

echo $car->brand . "<br>";         //  Приватное — вызовет ошибку
echo $car->year . "<br>";          //  Защищённое — вызовет ошибку

// Чтобы посмотреть все свойства корректно — вызываем метод
echo $car->getInfo();              //  Корректный способ
