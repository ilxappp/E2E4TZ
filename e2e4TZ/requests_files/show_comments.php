<?php
include('db.php');
$stmt =  $connection->prepare("SELECT * FROM `comments` WHERE `post_id` = ?");
$stmt->bind_param('s',$_GET['post-id']);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
?>
<?php foreach ($result as $comment) : ?>
    <div class="current_post-comments">
        <div class="current_post-comments-row-1">
            <div class="current_post-comments-row-1-colum">
                <div class="current_post-comments-row-colum-item">
                    <strong>Автор:</strong><BR><?=$comment['author'];?>
                </div>
            </div>
            <div class="current_post-comments-row-1-colum">
                <div class="current_post-comments-row-colum-item">
                    <strong>Содержание:</strong><BR><?=$comment['comment'];?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>