<?php
$reg = "/^[a-zA-Z0-9@_]+$/";
if(isset($_POST['login']) && isset($_POST['password'])){
    if(preg_match($reg,$_POST['login'])){
        if(preg_match($reg,$_POST['password'])){
            include('requests.php');
            add_user($_POST['login'],md5($_POST['password'].$_POST['login']));
        }
    }
}
?>