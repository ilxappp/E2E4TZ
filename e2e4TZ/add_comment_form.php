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
        <form action="requests_files/add_comment.php" method="POST">
            <h1>Добавить комментарий</h1>
            <HR>
            <input class="input" type="text" id="id" name="id" value="<?=$_GET['id'];?>" style="display:none">
            <p>Введите комментарий:</p>
            <textarea class="input" id="comment" name="comment" cols="40" rows="30" maxlength="1000" style="resize:none;" required></textarea>
            <p>Завершить:</p>
            <input type="submit" class="button" value="Добавить">
        </form>
    </div>
</body>
</html>