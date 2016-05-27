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