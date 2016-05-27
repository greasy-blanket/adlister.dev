<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{

    $valid = true;

    // checks if $input_name is in the files super global
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {

        // checks if there are any errors on the upload from the submission
        if(!$_FILES[$input_name]['error'])
        {

            $tempFile = $_FILES[$input_name]['tmp_name'];
                $image_url = '/img/uploads' . $input_name;
                move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
                return $image_url;
        }

    }
    return null;
}

// USER LOGIN HELPERS ##############
function isFormCompete()
{
    $bool = false;

    if(isset($_REQUEST)) {
// compair passwords 1 and 2
// check db for email
    // throw exceptions where needed
    return bool;

// format name to be full-name

//Set: name, email, passwd,
// save();
// redirect to user/account;
    }
}

// From Kristen: logic from /views/ads/show.php
$item = ['title' => 'Jet', 'owner' => 'Sally', 'description' => 'lorem ipsum delor and other really neat things.', 'email' => 'sally89@gmail.com', 'address' => '1324 S. Lorem, San Antonio, Texas, 77777'];
    return $item;

// From Kristen: logic from /views/users/account.php
$data = [];
    $ads = [];

    $data['name'] = 'Jane';
    $data['email'] = 'jane1981@hotmail.com';

    $ads = ['Sony Playstation', 'Cat With Laser Eyes', 'Charlie Brown Shirt'];

    return [
        'data' => $data,
        'ads'  => $ads,
        ];

// From Kristen: logic from /views/users/edit.php
$user = ['name' => 'Jane', 'email' => 'jane1981@hotmail.com', 'username' => 'jane1981',];
    return $user;

// This shows all items from the database in the index.php file
function fetchAllItems()
{
    // 
}