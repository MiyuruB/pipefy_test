<?php

include (ROOT_PATH . "/app/database/db.php");
include (ROOT_PATH . "/app/helpers/validatePost.php");


$table = 'posts';

$categories = selectAll('categories');
$posts = selectAll($table);



$errors = array();
$id = '';
$title = '';
$sub_title = '';
$body = '';
$category_id = '';
$published = '';

if (isset($_GET['id'])) {
   $post = selectOne($table, ['id' => $_GET['id']] );

$id= $post['id'];
$title = $post['title'];
$sub_title = $post ['sub_title'];
$body = $post['body'];
$category_id = $post['category_id'];
$published = $post['published'];
}

if (isset($_GET['delete_id'])) {

    $count = delete($table, $_GET['delete_id']);
 
    header("location: " . BASE_URL . "/admin/posts/index.php"); 
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
  
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
  
    header("location: " . BASE_URL . "/admin/posts/index.php"); 
    exit();
}



if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET ['published'];
    $post_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    header('location: ' . BASE_URL . '/admin/posts/index.php');
    exit(); 
}


if (isset($_POST['add-post'])) {
    $errors = validatePost($_POST);

    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $post_id = create($table, $_POST);
        header ("location:" . BASE_URL . '/admin/posts/index.php');
        
    } else {

        $title = $_POST ['title'];
        $sub_title = ['sub-title'];
        $body = $_POST ['body'];
        $category_id =  $_POST['category_id'];
        $published =  isset($_POST['published']) ? 1 : 0;
    }
    


}

if (isset($_POST['edit-button'])) {
    $errors = validatePost($_POST);

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['edit-button'], $_POST['id']);
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        $post_id = update($table, $id, $_POST);
        header ("location:" . BASE_URL . '/admin/posts/index.php');
        
    } else {

        $title = $_POST ['title'];
        $body = $_POST ['body'];
        $sub_title = ['sub-title'];
        $category_id =  $_POST['category_id'];
        $published =  isset($_POST['published']) ? 1 : 0;

}
}