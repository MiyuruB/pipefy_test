<?php


include (ROOT_PATH . "/app/database/db.php");
include (ROOT_PATH . "/app/helpers/validateCategory.php");

$table = 'categories';

$errors = array();

$id = '';
$name = '';
$description = '';

$categories = selectAll($table);



if (isset($_POST['submit-button'])) {
  $errors = validateCategory($_POST);



  if (count($errors) == 0) {
    unset($_POST['submit-button']);
    $_POST['description'] = htmlentities($_POST['description']);
    $category_id = create( "$table", $_POST);
    header('location: ' . BASE_URL . '/admin/category/index.php');
    exit(); 
  } else {
    $name = $_POST ['name'];
    $description = $_POST['description'];
  }
} 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = selectOne($table, ['id' => $id]);
    $id = $category['id'];
    $name = $category['name'];
    $description = $category['description'];
}

if (isset($_GET['del_id'])) {
  $id = $_GET['del_id'];
  $count = delete($table, $id);
  header('location: ' . BASE_URL . '/admin/category/index.php');
  exit(); 
}


if (isset($_POST['edit-btn'])) {
  $id = $_POST['id'];
  unset($_POST['edit-btn'], $_POST['id']);
  $category_id = update($table, $id, $_POST);

  header('location: ' . BASE_URL . '/admin/category/index.php');
  exit(); 
}