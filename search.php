<?php
include (ROOT_PATH . "/app/database/connect.php"); 

if (isset($_GET['term'])) {
$query = "SELECT * FROM posts WHERE title LIKE '{$_GET['term']}%' LIMIT 25";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
while ($user = mysqli_fetch_array($result)) {
$res[] = $user['title'];
}
} else {
$res = array();
}
echo json_encode($res);
}
?>