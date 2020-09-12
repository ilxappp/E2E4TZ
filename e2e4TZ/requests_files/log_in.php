<?php
include('requests.php');
log_in($_POST['login'],md5($_POST['password'].$_POST['login']));
?>