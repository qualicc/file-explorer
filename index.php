<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="indexForm.php" method="post">
            <div class="user-box">
                <input type="password" name="code" required>
                <label>Access code</label>
            </div>
            <?php                
                if (isset($_SESSION['error_message'])) {
                    echo "<div class='error-message'>" . $_SESSION['error_message'] . "</div>";
                    // Usunięcie błędu po wyświetleniu
                    unset($_SESSION['error_message']);
                }
            ?>
        </form>
    </div>
</body>
</html>