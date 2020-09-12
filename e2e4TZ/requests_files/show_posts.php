<?php 
// php pagination script
    $page = isset($_GET['page']) ? $_GET['page']: 1;
    $limit = 2;
    $offset = $limit*($page-1);
    include('db.php');
    $result = $connection->query("SELECT * FROM `post` LIMIT $limit OFFSET $offset");
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $all_pages = ceil(mysqli_num_rows($connection->query("SELECT * FROM `post`"))/$limit);
// php pagination script
?>
<?php foreach ($posts as $post) : ?>
    <div class="post" onclick="document.location='current_post.php?post-id=<?=$post['id'];?>&author=<?=$post['author'];?>&title=<?=$post['title'];?>'" style="cursor:pointer">
        <div class="post-header">
            <?=$post['title'];?>
        </div>
        <HR>
        <div class="post-short_content">
            <?=$post['short_content'];?>
        </div>
    </div>
<?php endforeach; ?>