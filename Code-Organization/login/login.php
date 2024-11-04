<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="borderx">
            <?php
                $error_message = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Dummy credentials
                    $validUsername = "ABC";
                    $validPassword = "123";

                    if ($username === $validUsername && $password === $validPassword) {
                        header("Location: main.php"); 
                        exit;
                    } else {
                        $error_message = "User or password is incorrect.";
                    }
                }
            ?>
            <form action="login.php" method="POST">
                <div class="mb-4">
                    <label class="l1" for="username">User</label>
                    <input type="text" id="username" name="username" placeholder="Please Enter user" required>
                </div>
                <div class="mb-4">
                    <label class="l1" id="L2" for="password">Password</label>
                    <input type="password" class="form-label" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div id="error-message" style="color: red;"><?= $error_message ?></div>
                <button type="submit" class="btn btn-success">Log in</button>
                <button type="button" class="btn btn-primary" onclick="window.location.href='/Code-Organization/register/register.php'">Sign up</button>
            </form>
        </div>
    </div>
</body>
</html>
