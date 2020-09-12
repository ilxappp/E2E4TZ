<?php
include('db.php');
$stmt =  $connection->prepare("SELECT * FROM `post` WHERE `id` = ?");
$stmt->bind_param('s',$_GET['post-id']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);
$stmt->close();
?>
<div class="current_post-content">
    <div class="current_post-content-row-1">
        <div class="current_post-content-row-1-colum">
            <div class="current_post-content-row-colum-item">
                <strong>Автор:</strong><BR><?=$row['author'];?>
            </div>
        </div>
        <div class="current_post-content-row-1-colum">
            <div class="current_post-content-row-colum-item">
                <strong>Краткое содержание:</strong><BR><?=$row['short_content'];?>
            </div>
        </div>
        <div class="current_post-content-row-1-colum">
            <div class="current_post-content-row-colum-item">
                <strong>Cодержание:</strong><BR><?=$row['content'];?> 
            </div>
        </div>
    </div>
</div>

