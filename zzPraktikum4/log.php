<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <form method="POST" action="cont-log.php">
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <input type="checkbox" name="remember"> Remember Me<br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>