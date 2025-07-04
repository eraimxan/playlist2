PHP ООП Практика
Описание проекта
Данный репозиторий содержит набор практических заданий по основам объектно-ориентированного программирования (ООП) на языке PHP. Цель проекта — закрепить ключевые принципы ООП через пошаговую реализацию учебных сценариев.

Содержание заданий
Задание 2–4. Класс BankAccount
Файл: bank_account.php

Реализовано:

Класс BankAccount с базовыми свойствами (владелец, баланс, номер счета, валюта)

Методы:

deposit() — пополнение счета

withdraw() — снятие средств с проверкой остатка

getBalance() — получение баланса

displayAccountInfo() — информация о счете

Конструктор для инициализации объекта

Создание нескольких объектов с тестовыми операциями

Изученные темы: классы, свойства, методы, конструкторы, инкапсуляция

Задание 5. Наследование: Shape, Circle, Rectangle
Файл: shapes.php

Реализовано:

Базовый класс Shape

Подклассы Circle и Rectangle с методом calculateArea()

Вызов родительского конструктора

Тестирование объектов с выводом названия и площади

Изученные темы: наследование, полиморфизм, переопределение методов

Задание 6. Модификаторы доступа: Car
Файл: car_access_modifiers.php

Реализовано:

Класс Car с различными уровнями доступа:

private $brand

public $model

protected $year

Демонстрация ограничений доступа извне

Использование наследования для доступа к protected свойствам

Изученные темы: модификаторы доступа, геттеры, наследование

Задание 7. Геттеры и сеттеры: User
Файл: user_getters_setters.php

Реализовано:

Класс User с приватными свойствами

Сеттеры с валидацией:

setUsername() — проверка на пустую строку

setEmail() — валидация через filter_var()

setPassword() — минимальная длина

Геттеры для вывода данных

Изученные темы: инкапсуляция, геттеры, сеттеры, валидация

Задание 8. Абстрактные классы: Vehicle
Файл: abstract_vehicle.php

Реализовано:

Абстрактный класс Vehicle с методами start() и stop()

Классы-наследники: Car и Bicycle

Тестирование каждого транспорта с выводом сообщений

Изученные темы: абстрактные классы, обязательная реализация методов

Задание 9. Интерфейсы: DataFormat
Файл: data_format_interface.php

Реализовано:

Интерфейс DataFormat с методами encode() и decode()

Класс JsonFormat — работа с json_encode и json_decode

Класс XmlFormat — работа с SimpleXMLElement

Тестирование с массивом и преобразование туда-обратно

Изученные темы: интерфейсы, форматирование данных, преобразование структур

Задание 10. Трейты: Loggable
Файл: loggable_trait.php

Реализовано:

Трейт Loggable с методом log(), сохраняющим сообщения в файл

Класс User с методом register(), вызывающим лог при регистрации

Тестирование логирования

Изученные темы: трейты, повторное использование кода, логирование в файл

Задание 11. Статические методы и свойства: AppVersion
Файл: app_version_static.php

Реализовано:

Класс AppVersion со статическим свойством $version

Методы:

getVersion() — получить текущую версию

updateVersion() — обновить версию

Тестирование до и после обновления

Изученные темы: статические методы и свойства, работа без объектов

Основные концепции ООП, изученные в заданиях
Инкапсуляция

Наследование

Полиморфизм

Абстракция

Интерфейсы и трейты

Статические элементы

Валидация и защита данных

