<?php

 require_once __DIR__ . '/../models/Ad.php';
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


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
            $newName = $_FILES[$input_name]['name'];
            $extension = strtolower(pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION));
            // Validate Size and Extension
            if( $_FILES[$input_name]['size'] > 1024000000)
            {
                $valid = false;
            }
            // only allows certain file extensions

            if( $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
            {
                $valid  = false;
            }
            // If Image file makes it to this point, send file to this directory
            if($valid)
            {
                $image_url = '/img/uploads' . $newName;
                move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
                return $image_url;
            }
            else
            {
                return null;
            }
        }
    } else {
        return null;
    }
}

// USER LOGIN HELPERS ##############

function logInUser()
{
    if (Input::has('username') && Input::has('password')){
        $username = Input::get('username');
        $password = Input::get('password');
        if(Auth::attempt($username,$password)){
            header('Location: http://adlister.dev/user/account');
        }
    }
}

function userLogout()
{

    if(Auth::check()) {
        Auth::logout();
// tried putting this redirect in so that you can tell you actually logged out
// but never get redirected which proves user is never logging out.
// function is being called in the page controller...
        header('Location: http://adlister.dev');

    }
}

function createNewUser()
{

$errors = [];

($_POST && !Input::has('name')) ? array_push($errors, 'Name empty') : null;

    if (Input::has('name') && Input::has('username') && Input::has('password') && Input::has('confirmPassword') && Input::has('email')) {
        $user = new User;
        try{
            $user->name = Input::get('name');
        }catch(Exception $e){
            $errors[] = $e->getMessage();
        }

        try{
             $user->username = Input::get('username');
        }catch(Exception $e){
            $errors[] = $e->getMessage();
        }
        if ($user->confirmPassword !== $user->password) {
          $errors[] = 'Your password and password confirmation do not match, try again';
        } else {
          try{
              $user->password = Input::get('password');
          }catch(Exception $e){
              $errors[] = $e->getMessage();
          }
        }

        try{
            $user->email = Input::get('email');
        }catch(Exception $e){
            $errors[] = $e->getMessage();
        }

        if(empty($errors)) {
            $user->save();
            header('location:http://adlister.dev/user/login');
            die;
        }
    }
}

function createNewAd()
{

    if (Input::has('name')) {
        $ad = new Ad();
        $ad->user_id = Auth::user()->id;
        $ad->name = Input::get('name');
        $ad->description = Input::get('description');
        $ad->price = Input::get('price');
        $ad->img_url = saveUploadedImage('img');
        $ad->save();
    }
}

function getUserInfo()
{
    $userObject = Auth::user();
    var_dump($userObject);
    $user = ['name' => $userObject->name, 'email' => $userObject->email, 'username' => $userObject->username,];

    //on submit save and take backto the user account page
    $errors = [];

($_POST && !Input::has('name')) ? array_push($errors, 'Name empty') : null;

    if (Input::has('name') && Input::has('username') && Input::has('email')) {
        try{
            $userObject->name = Input::get('name');
        }catch(Exception $e){
            $errors[] = $e->getMessage();
        }

        try{
             $userObject->username = Input::get('username');
        }catch(Exception $e){
            $errors[] = $e->getMessage();
        }
        // if ($userObject->confirmPassword !== $userObject->password) {
        //   $errors[] = 'Your password and password confirmation do not match, try again';
        // } else {
        //   try{
        //       $userObject->password = Input::get('password');
        //   }catch(Exception $e){
        //       $errors[] = $e->getMessage();
        //   }
        // }

        try{
            $userObject->email = Input::get('email');
        }catch(Exception $e){
            $errors[] = $e->getMessage();
        }

        if(empty($errors)) {
            $userObject->save();
            header('location:http://adlister.dev/user/account');
            die;
        }
    }

    return $user;
}

