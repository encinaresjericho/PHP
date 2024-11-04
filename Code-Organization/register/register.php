<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="borderx">
            <?php
                $error_message = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST['name'];
                    $lastname = $_POST['lastname'];
                    $age = $_POST['age'];
                    $password = $_POST['password'];
                    $confirm_password = $_POST['Conpassword'];

                    // Validation
                    if (strlen($name) < 2) {
                        $error_message = "First name must be at least 2 characters.";
                    } elseif (strlen($lastname) < 2) {
                        $error_message = "Last name must be at least 2 characters.";
                    } elseif (!is_numeric($age) || $age < 18) {
                        $error_message = "You must be at least 18 years old.";
                    } elseif (strlen($password) < 8) {
                        $error_message = "Password must be at least 8 characters.";
                    } elseif ($password !== $confirm_password) {
                        $error_message = "Passwords do not match.";
                    } else {
                        // Code to save registration data to the database goes here
                        echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
                    }
                }
            ?>
            <form action="register.php" method="POST">
                <div class="mb-4">
                    <label id="l1" for="name">Name</label>
                    <input type="text" name="name" placeholder="FIRST NAME" required>
                </div>
                <div class="mb-4">
                    <label id="l1" for="lastname">Last Name</label>
                    <input type="text" name="lastname" placeholder="LAST NAME" required>
                </div>
                <div class="mb-4">
                    <label id="l1" for="age">Age</label>
                    <input type="text" name="age" placeholder="ENTER YOUR AGE" required>
                </div>
                <div class="mb-4">
                    <label id="l1" for="password">Password</label>
                    <input type="password" name="password" placeholder="* * * * *" required>
                </div>
                <div class="mb-4">
                    <label id="l1" for="Conpassword">Confirm Password</label>
                    <input type="password" name="Conpassword" placeholder="* * * * *" required>
                </div>
                <div id="error-message" style="color: red;"><?= $error_message ?></div>
                <button type="submit" id="register" class="btn btn-success">REGISTER</button>
            </form>
        </div>
    </div>
</body>
</html>
