<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/admin.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="bg">
        <div class="login-card">
            <form action="/adminlogin" method="post">
                <img src="../public/images/lock-icon.svg" alt="icon of a lock">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password">
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>

</body>
</html>