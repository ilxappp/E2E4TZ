<?php
include('requests.php');
add_post($_POST['title'],$_POST['short-content'],$_POST['content'],$_COOKIE['login']);
header('location:/');
?>