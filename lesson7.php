<?php

class User {
    // Приватные свойства
    private $username;
    private $email;
    private $password;

    // Геттеры
    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    // Сеттеры с проверками

    public function setUsername($username) {
        if (is_string($username) && !empty($username)) {
            $this->username = $username;
        } else {
            echo "Username must be a non-empty string.<br>";
        }
    }

    public function setEmail($email) {
        if (is_string($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            echo "Invalid email format.<br>";
        }
    }

    public function setPassword($password) {
        if (is_string($password) && strlen($password) >= 6) {
            $this->password = $password;
        } else {
            echo "Password must be at least 6 characters long.<br>";
        }
    }
}

//  Пример использования
$user = new User();

$user->setUsername("john_doe");         // корректно
$user->setEmail("john@example.com");    // корректно
$user->setPassword("secret123");        // корректно

// Неверные данные (для демонстрации ошибок)
$user->setUsername("");                 // ошибка
$user->setEmail("not-an-email");        // ошибка
$user->setPassword("123");              // ошибка

// Вывод информации
echo "<br><strong>Пользователь:</strong><br>";
echo "Имя: " . $user->getUsername() . "<br>";
echo "Email: " . $user->getEmail() . "<br>";
echo "Пароль: " . $user->getPassword() . "<br>";
