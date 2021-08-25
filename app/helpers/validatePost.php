<?php



function validatePost ($posts){

  
$errors = array();

if(empty($posts['title'])) {
    array_push($errors, 'Title is required');
}

if(empty($posts['body'])) {
    array_push($errors, 'body is required');
}

if(empty($posts['category_id'])) {
    array_push($errors, 'Please select a category');
}

$existingPost = selectOne('posts', ['title' => $posts['title']]);
    if ($existingPost) {
        if (isset($posts['edit-button']) && $existingPost['id'] != $posts['id']) {
            array_push($errors, 'Post with that title already exists');
        }

        if (isset($posts['add-post'])) {
            array_push($errors, 'Post with that title already exists');
        }
    }

return $errors;
}
