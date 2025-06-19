<?php

class BankAccount {
    private $owner;
    private $balance;
    private $accountNumber;
    private $currency;

    public function __construct($owner, $accountNumber, $currency, $balance = 0) {
        $this->owner = $owner;
        $this->accountNumber = $accountNumber;
        $this->currency = $currency;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited {$amount} {$this->currency}.<br>";
        } else {
            echo "Amount must be positive.<br>";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                echo "Withdrawn {$amount} {$this->currency}.<br>";
            } else {
                echo "Insufficient funds.<br>";
            }
        } else {
            echo "Amount must be positive.<br>";
        }
    }

    public function getBalance() {
        return $this->balance;
    }

    public function displayAccountInfo() {
        echo "Account Owner: {$this->owner}<br>";
        echo "Account Number: {$this->accountNumber}<br>";
        echo "Balance: {$this->balance} {$this->currency}<br>";
    }
}

// Пример использования:
$account = new BankAccount("Ерасыл Раймхан", "123456789", "KZT", 10000);

$account->deposit(5000);
$account->withdraw(3000);
$account->displayAccountInfo();

?>
