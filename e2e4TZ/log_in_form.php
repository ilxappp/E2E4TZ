<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2E4.TZ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
            include('requests_files/show_header.php')
        ?>
    </header>
    <div class="add-user form">
        <form id="log_in-form"method="POST">
            <h1>Вход</h1>
            <HR>
            <p>Логин:</p>
            <input class="input" type="text" id="login" name="login" placeholder="Ваш логин" maxlength="100" required>
            <p>Пароль:</p>
            <input class="input" type="password" id="password" name="password" placeholder="Ваш пароль" maxlength="100" required>
            <p>Завершить вход:</p>
            <input type="submit" class="button" value="Войти">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>