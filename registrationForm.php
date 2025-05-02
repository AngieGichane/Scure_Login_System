<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Register</h2>
            <form id="registerForm" action="registrationLogic.php" method="POST">
                <input type="text" placeholder="Full Name" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" id="password" required>
                <input type="password" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" required>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="login.php">Login here</a></p>
            
            <?php
            if (isset($_SESSION['error'])) {
                echo '<div class="message error">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']);
            }

            if (isset($_SESSION['success'])) {
                echo '<div class="message success">Registration Successful! Welcome ' . $_SESSION['success']['username'] . '! You can now log in.</div>';
                echo '<script>setTimeout(function(){ window.location.href = "login.php"; }, 2000);</script>';
                unset($_SESSION['success']);
            }
            ?>
        </div>
    </div>

    <script>
        // Client-side password match validation
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match!');
            }
        });
    </script>
</body>

</html>