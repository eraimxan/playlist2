<?php

class BankAccount {
    private $owner;
    private $balance;
    private $accountNumber;
    private $currency;

    // Конструктор
    public function __construct($owner, $balance, $accountNumber, $currency) {
        $this->owner = $owner;
        $this->balance = $balance;
        $this->accountNumber = $accountNumber;
        $this->currency = $currency;
    }

    // Метод для внесения средств
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "✅ {$this->owner}: Deposited {$amount} {$this->currency}<br>";
        } else {
            echo "⚠️ Deposit amount must be positive.<br>";
        }
    }

    // Метод для снятия средств
    public function withdraw($amount) {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                echo "✅ {$this->owner}: Withdrawn {$amount} {$this->currency}<br>";
            } else {
                echo "❌ {$this->owner}: Insufficient funds to withdraw {$amount} {$this->currency}<br>";
            }
        } else {
            echo "⚠️ Withdrawal amount must be positive.<br>";
        }
    }

    // Метод для получения баланса
    public function getBalance() {
        return $this->balance;
    }

    // Метод для отображения информации о счёте
    public function displayAccountInfo() {
        echo "<strong>Account Info:</strong><br>";
        echo "Owner: {$this->owner}<br>";
        echo "Account Number: {$this->accountNumber}<br>";
        echo "Balance: {$this->balance} {$this->currency}<br><br>";
    }
}

// Создание нескольких счетов
$account1 = new BankAccount("Ерасыл Раймхан", 10000, "0011223344", "KZT");
$account2 = new BankAccount("Анна Смирнова", 500, "5544332211", "USD");
$account3 = new BankAccount("John Doe", 2000, "9988776655", "EUR");

// Вызов методов для каждого счёта
$account1->deposit(2000);
$account1->withdraw(3000);
$account1->displayAccountInfo();

$account2->deposit(150);
$account2->withdraw(800); // недостаточно средств
$account2->displayAccountInfo();

$account3->withdraw(500);
$account3->deposit(1000);
$account3->displayAccountInfo();
