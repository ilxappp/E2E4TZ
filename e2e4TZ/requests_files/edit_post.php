<?php
include('requests.php');
edit_post($_POST['id'],$_POST['title'],$_POST['short-content'],$_POST['content']);
header('location:/');
?>