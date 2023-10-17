<?php
require 'DB_config.php';
class Bank_Account {
    // ... (same class code as before)

    public function deposit($amount) {
        // (same deposit method code)
    }

    public function withdraw($amount) {
        // (same withdraw method code)
    }

    public function get_balance() {
        return "Account balance for $this->account_holder: $$this->balance";
    }
}

function register_new_account() {
    // (same registration code as before)
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        register_new_account();
    } elseif (isset($_POST['inquire'])) {
        // Inquire functionality
        // Implement here
    } elseif (isset($_POST['deposit'])) {
        // Deposit functionality
        // Implement here
    } elseif (isset($_POST['withdraw'])) {
        // Withdraw functionality
        // Implement here
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bank Account Management</title>
</head>
<body>
    <h2>Bank Account Management</h2>

    <!-- Registration Form -->
    
    <form method="post" action="">
        <label for="account_holder">Account Name:</label>
        <input type="text" name="account_holder" required><br>

        <label for="initial_balance">Initial Balance:</label>
        <input type="number" name="initial_balance" required><br>

    </form>

    <!-- Account Actions -->
    <h3>Account Actions</h3>
    <form method="post" action="">
        <button type="submit" name="inquire">Deposit</button>
        <button type="submit" name="deposit">Withdraw</button>
        <button type="submit" name="withdraw">Inquire</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inquire'])) {
        // Display balance inquiry form or result
        // Implement here
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deposit'])) {
        // Display deposit form or result
        // Implement here
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['withdraw'])) {
        // Display withdrawal form or result
        // Implement here
    }
    ?>
</body>
</html>
