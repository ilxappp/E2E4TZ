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
    <?php
        include('requests_files/db.php');
        $stmt =  $connection->prepare("SELECT * FROM `post` WHERE `id` = ?");
        $stmt->bind_param('s',$_GET['id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $stmt->close();
    ?>
    <div class="add-user form">
        <form action="requests_files/edit_post.php" method="POST">
            <h1>Редактировать статью</h1>
            <HR>
            <input class="input" type="text" id="id" name="id" value="<?=$_GET['id'];?>" style="display:none">
            <p>Заголовок:</p>
            <input class="input" type="text" id="title" name="title" placeholder="Заголовок" value="<?=$row['title'];?>"  minlenght="8" maxlength="100" required>
            <p>Введите краткое содержание:</p>
            <textarea class="input" id="short-content" name="short-content" cols="40" rows="10" maxlength="200" style="resize:none;" required><?=$row['short_content'];?> </textarea>
            <p>Введите полное содержание:</p>
            <textarea class="input" id="content" name="content" cols="40" rows="30" maxlength="1000" style="resize:none;" required><?=$row['content'];?></textarea>
            <p>Завершить редактирование:</p>
            <input type="submit" class="button" value="Редактировать">
        </form>
    </div>
</body>
</html>