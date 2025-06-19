<?php

// Трейт Loggable
trait Loggable {
    public function log($message) {
        $logMessage = date('Y-m-d H:i:s') . " - $message\n";
        file_put_contents("log.txt", $logMessage, FILE_APPEND);
    }
}

// Класс User с использованием трейта
class User {
    use Loggable;

    private $username;
    private $email;

    public function register($username, $email) {
        $this->username = $username;
        $this->email = $email;

        // Здесь могла бы быть логика сохранения в БД

        // Логируем регистрацию
        $this->log("Пользователь {$this->username} успешно зарегистрирован");
        echo "Регистрация прошла успешно для: {$this->username}<br>";
    }
}

// Пример использования
$user = new User();
$user->register("john_doe", "john@example.com");
