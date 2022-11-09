<?php
include 'conn.php';
$row = $_POST['row'];
$rowperpage = 3;
$query = 'SELECT * FROM news limit '.$row.','.$rowperpage;
$result = mysqli_query($conn,$query);
$html = '';
while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    $shortcontent = substr($content, 0, 160)."...";
    $link = $row['link'];
 
    $html .= '<div id="post_'.$id.'" class="post">';
    $html .= '<h1>'.$title.'</h1>';
    $html .= '<p>'.$shortcontent.'</p>';
    $html .= '<a href="'.$link.'" class="more" target="_blank">More</a>';
    $html .= '</div>';
}
echo $html;