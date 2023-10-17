<?php
require 'DB_config.php';
class Bank_Accoun {
    private $Account_Name;
    private $Balance;

    public function register_new_account($Account_Name, $Balance = 0.0) {
        $this->Account_Name = $Account_Name;
        $this->Balance = $Balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return "Deposited $$amount. New balance: $$this->balance";
        } else {
            return "Invalid deposit amount. Please deposit a positive amount.";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrew $$amount. New balance: $$this->balance";
        } elseif ($amount > $this->balance) {
            return "Insufficient funds.";
        } else {
            return "Invalid withdrawal amount. Please withdraw a positive amount.";
        }
    }

    public function get_balance() {
        return "Account balance for $this->account_name: $$this->balance";
    }
}

// Example usage:
// $account1 = new Bank_Account("John Doe", 1000.0);

// echo $account1->get_balance() . "\n";
// echo $account1->deposit(500.0) . "\n";
// echo $account1->withdraw(200.0) . "\n";
// echo $account1->withdraw(1500.0) . "\n";

?>