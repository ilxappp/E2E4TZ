<?php
include('db.php');
function authorization($token)
{
    global $connection;
    $stmt =  $connection->prepare("SELECT * FROM `user` WHERE `password` = ?");
    $stmt->bind_param('s',$token);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    if($result->num_rows > 0){
       return $token;
    }
}

function exit_user(){
    setcookie('login', $user['login'], time()-3600,"/");
    setcookie('token', $user['password'], time()-3600,"/");
}

function add_user($login,$password){
    
    global $connection;
    $stmt =  $connection->prepare("SELECT * FROM `user` WHERE `login` = ?");
    $stmt->bind_param('s', $login);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    if($result->num_rows > 0){
        echo(false);
    }
    else
    {
        $stmt =  $connection->prepare("INSERT INTO `user` (`login`,`password`) VALUES (?,?)");
        $stmt->bind_param('ss', $login,$password);
        $stmt->execute();
        $stmt->close();
        echo(true);
    }
}

function add_post($title,$short_content,$content,$author){
    global $connection;
    $stmt =  $connection->prepare("INSERT INTO `post` (`title`,`short_content`,`content`,`author`) VALUES (?,?,?,?)");
    $stmt->bind_param('ssss', $title,$short_content,$content,$author);
    $stmt->execute();
    $stmt->close();
}

function log_in($login,$password){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM `user` WHERE `login` = ? AND `password` = ?");
    $stmt->bind_param('ss', $login,$password);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        setcookie('login', $user['login'], time()+3600,"/");
        setcookie('token', $user['password'], time()+3600,"/");
        echo(true);
    }
    else
    {
        echo(false);
    }
}

function edit_post($id,$title,$short_content,$content){
    global $connection;
    $stmt = $connection->prepare("UPDATE `post` SET `title`=?,`short_content`=?,`content`=? WHERE `id` = ?");
    $stmt->bind_param('ssss', $title,$short_content,$content,$id);
    $stmt->execute();
    $stmt->close();
}

function add_comment($author,$comment,$post_id){
    global $connection;
    $stmt =  $connection->prepare("INSERT INTO `comments` (`author`,`comment`,`post_id`) VALUES (?,?,?)");
    $stmt->bind_param('sss', $author,$comment,$post_id);
    $stmt->execute();
    $stmt->close();
}
?>