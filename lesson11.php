<?php

class AppVersion {
    // Приватное статическое свойство
    private static $version = "1.0.0";

    // Статический метод для получения текущей версии
    public static function getVersion() {
        return self::$version;
    }

    // Статический метод для обновления версии
    public static function updateVersion($newVersion) {
        if (is_string($newVersion) && !empty($newVersion)) {
            self::$version = $newVersion;
        } else {
            echo "Ошибка: Версия должна быть непустой строкой.<br>";
        }
    }
}

//Проверка работы

// Получаем текущую версию
echo "Текущая версия: " . AppVersion::getVersion() . "<br>";

// Обновляем версию
AppVersion::updateVersion("2.1.3");

// Получаем новую версию
echo "Обновленная версия: " . AppVersion::getVersion() . "<br>";

// Попытка задать некорректную версию
AppVersion::updateVersion("");
