<?php
if($all_pages>0){
    echo'<div class="pagination form" style="margin-top:5px;">';
    $limitshow  = 2;
    if($page>1)
        echo '<a href="'.$_SERVER['index.php'].'?page=1" style="color:#2ba6c2;text-decoration:none;"><</a>&nbsp;';
    $nextPage = $page+1;
    $start = $nextPage-$limitshow ;
    $end = $nextPage+$limitshow ;
    for ($j = 1; $j<$all_pages+1; $j++) 
        if ($j>=$start && $j<=$end) 
        {
            if ($j==($page)) echo '<a href="'.$_SERVER['index.php'].'?page='.$j.'"style="color:black;">'.$j.'</a>&nbsp;';
            else echo '<a href="'.$_SERVER['index.php'].'?page='.$j.'" style="color:blue;text-decoration:none;">'.$j.'</a>&nbsp;';
        }
    if($page<$all_pages)
    echo '<a href="'.$_SERVER['index.php'].'?page='.$all_pages.'" style="color:#2ba6c2;text-decoration:none;">></a>&nbsp;';
echo'</div>'; 
}
?>