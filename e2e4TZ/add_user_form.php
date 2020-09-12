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
        <form  id="add-user-form" method="POST">
            <h1>Регистрация</h1>
            <HR>
            <p>Введите ваш логин:</p>
            <label for="login">
                <input class="input" type="text" id="login" name="login" placeholder="Логин" minlength="4" required>
                <ul class="small-text input-requirements">
                    <li>Длинее 3 символов</li>
                    <li>Только латинские буквы и цифры</li>
                </ul>
            </label>
            <p>Введите ваш пароль:</p>
            <label for="password">
                <input class="input" type="password" id="password" name="password" placeholder="Пароль" minlength="8" required>
                <ul class="small-text input-requirements">
                    <li>Длинее 7 символов</li>
                    <li>Только латинские буквы, цифры и специальные знаки</li>
                </ul>
            </label>
            <p>Введите ваш пароль еще раз:</p>
            <input class="input" type="password" id="confirm-password" name="confirm-password" placeholder="Пароль еще раз" required>
            <p>Завершить регистрацию:</p>
            <input type="submit" class="button" value="Зарегистрироваться">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

