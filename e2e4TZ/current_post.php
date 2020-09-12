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
            include('requests_files/show_header.php');
        ?>
    </header>
        <?php
            echo'<p>Статья: '.$_GET['title'].'</p>';
            include('requests_files/show_content.php');
            echo'<p>Комментарии:</p>';
            include('requests_files/show_comments.php');
        ?>
    <script src="script.js"></script>
</body>
</html>