<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Login</h2>
            <form class="form" id="loginForm" action="auth.php" method="POST">
                <div class="input-group">
                    <input type="text" placeholder="Username" name="username" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" id="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="registrationForm.php">Register here</a></p>
            
            <?php
            if (isset($_SESSION['login_status'])) {
                echo '<div class="message ' . ($_SESSION['login_status'] == "success" ? 'success' : 'error') . '">';
                if ($_SESSION['login_status'] == "success") {
                    echo "Login successful! Welcome back, " . $_SESSION['username'] . "!";
                    echo '<script>setTimeout(function(){ window.location.href = "portal.php"; }, 1500);</script>';
                } else {
                    echo $_SESSION['login_status'];
                }
                echo '</div>';
                unset($_SESSION['login_status']);
            }
            ?>
        </div>
    </div>
</body>

</html>