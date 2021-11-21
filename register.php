<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register.php" method="post">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label for="username">Enter a username </label>
            <input type="text" name="username" id="username" value="<?php echo $username; ?>" placeholder="username" required>
        </div>
        <div class="input-group">
            <label for="email">Enter your email </label>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="email" required>
        </div>
        <div class="input-group">
            <label for="password_1">Enter a password </label>
            <input type="password" name="password_1" id="password" placeholder="password" required>
        </div>
        <div class="input-group">
            <label for="password_2">Confirm password </label>
            <input type="password" name="password_2" id="password" placeholder="confirm password" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Login</a>
        </p>
    </form>
</body>
</html>