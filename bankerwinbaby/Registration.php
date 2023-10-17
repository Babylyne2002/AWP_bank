<?php
require_once('DB_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Account_Name = $_POST['Account_Name'];
    $Balance = floatval($_POST['Balance']);
    $Account_Type = $_POST['Account_Type'];
    $Password = $_POST['Password'];

    if ($Balance < 0) {
        echo "Balance cannot be negative.";
    } else {
        $sql = "INSERT INTO Bank_Account (Account_Name, Balance, Account_Type, Password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdss", $Account_Name, $Balance, $Account_Type, $Password);

        if ($stmt->execute()) {
            echo "Account registered successfully!";
        } else {
            echo "Error registering the account: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bank Account Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bank Account Registration</h1>
    <form class="form" method="post" action="Registration.php">
        <label for="Account_Name">Account Name:</label>
        <input type="text" name="Account_Name" required><br>

        <label for="Balance">Initial Balance:</label>
        <input type="number" name="Balance" step="0.01" required><br>

        <label for="Account_Type">Account Type:</label>
        <input type="text" name="Account_Type" required><br>

        <label for="Password">Password:</label>
        <input type="password" name="Password" required><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>