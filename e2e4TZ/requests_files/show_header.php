<div class="header">
    <?php if(!isset($_COOKIE['token'])): ?>
        <button class="button" onclick="document.location='/'">Главная</button>
        <button class="button" onclick="document.location='log_in_form.php'">Войти</button>
        <button class="button" onclick="document.location='add_user_form.php'">Зарегистрироваться</button>
    <?php else:?>
        <?php 
            include('requests.php');
            if(authorization($_COOKIE['token']) == $_COOKIE['token']):
        ?>
            <button class="button" onclick="document.location='/'">Главная</button>
            <button class="button" onclick="document.location='add_post_form.php'">Добавить статью</button>
            <button class="button" onclick="document.location='requests_files/exit.php'">Выйти</button>
            <?php if($_GET['post-id']!=''):?>
                <BR>
                <button class="button" onclick="document.location='add_comment_form.php?id=<?=$_GET['post-id'];?>'">Добавить комментарий</button> 
            <?php endif;?>
            <?php if($_GET['author']==$_COOKIE['login']):?>
                <button class="button" onclick="document.location='edit_content_form.php?id=<?=$_GET['post-id'];?>'">Редактировать статью</button> 
            <?php endif;?>
        <?php else:?>
            <button class="button" onclick="document.location='/'">Главная</button>
            <button class="button" onclick="document.location='log_in_form.php'">Войти</button>
            <button class="button" onclick="document.location='add_user_form.php'">Зарегистрироваться</button>
        <?php endif;?>
    <?php endif;?>
</div>