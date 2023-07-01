<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="guests.php" method="post">
        <p>Введите имя: </p> <label>
            <input type="text" name="user_name">
        </label>
        <br>
        <p>Введите номер: </p> <label>
            <input type="text" name="phone_number">
        </label>
        <br>
        <label>Введите пароль:
            <input type="text" name="password">
        </label>
        <br>
        <br>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>