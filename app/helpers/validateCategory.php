<?php

function validateCategory ($categories){

$errors = array();

if(empty($categories['name'])) {
    array_push($errors, 'Name is required');
}


// $exisitingCategory = selectOne('categories', ['name' => $categories['name']]);
// if ($exisitingCategory)
// {
//     array_push($errors, ' Name is already taken!');
// }


$exisitingCategory = selectOne('categories', ['name' => $categories['name']]);
    if ($exisitingCategory) {
        if (isset($categories['edit-btn']) && $categories['id'] != $categories['id']) {
            array_push($errors, 'Category with that title already exists');
        }

        if (isset($categories['submit-button'])) {
            array_push($errors, 'Category with that title already exists');
        }
    }

return $errors;
}
