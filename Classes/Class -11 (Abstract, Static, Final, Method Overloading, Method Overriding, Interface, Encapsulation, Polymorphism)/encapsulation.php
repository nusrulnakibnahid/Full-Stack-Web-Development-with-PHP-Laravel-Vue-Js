<?php

class BankAccount {
    private $balance; // Private property

    // Constructor to set the initial balance
    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    // Public method to get the balance
    public function getBalance() {
        return $this->balance;
    }

    // Public method to deposit money
    public function deposit($amount) {
        $this->balance += $amount;
    }
}

// Create a BankAccount object
$account = new BankAccount(100); // Initial balance is 100

// Deposit money
$account->deposit(50);

// Get the updated balance
echo "Current Balance: " . $account->getBalance();

?>
