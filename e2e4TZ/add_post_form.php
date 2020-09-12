<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2E4.TZ</title>
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
        <form action="requests_files/add_post.php" method="POST">
            <h1>Добавить статью</h1>
            <HR>
            <p>Заголовок:</p>
            <input class="input" type="text" id="title" name="title" placeholder="Заголовок" minlenght="8" maxlength="100" required>
            <p>Введите краткое содержание:</p>
            <textarea class="input" id="short-content" name="short-content" cols="40" rows="10" maxlength="200" style="resize:none;" required></textarea>
            <p>Введите полное содержание:</p>
            <textarea class="input" id="content" name="content" cols="40" rows="30" maxlength="1000" style="resize:none;" required></textarea>
            <p>Завершить добавление:</p>
            <input type="submit" class="button" value="Добавить">
        </form>
    </div>

</body>
</html>