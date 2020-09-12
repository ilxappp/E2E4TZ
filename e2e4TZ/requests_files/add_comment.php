<?php
include('requests.php');
add_comment($_COOKIE['login'],$_POST['comment'],$_POST['id']);
header('location:/');
?>