<?php
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
            $newName = substr($tempFile, 4);
            $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
            // Validate Size and Extension
            if( $_FILES[$input_name]['size'] > (1024000000))
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
                $image_url = '/img/uploads' . $newName . '.' . $extension;
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
    
// From Kristen: logic from /views/ads/show.php
// $item = ['title' => 'Jet', 'owner' => 'Sally', 'description' => 'lorem ipsum delor and other really neat things.', 'email' => 'sally89@gmail.com', 'address' => '1324 S. Lorem, San Antonio, Texas, 77777'];
    // return $item;

// From Kristen: logic from /views/users/account.php
// $data = [];
//     $ads = [];

//     $data['name'] = 'Jane';
//     $data['email'] = 'jane1981@hotmail.com';

//     $ads = ['Sony Playstation', 'Cat With Laser Eyes', 'Charlie Brown Shirt'];

//     return [
//         'data' => $data,
//         'ads'  => $ads,
//         ];

// // From Kristen: logic from /views/users/edit.php
// $user = ['name' => 'Jane', 'email' => 'jane1981@hotmail.com', 'username' => 'jane1981',];
//     return $user;


// This shows all items from the database in the index.php file
function fetchAllItems()
{
    self::dbConnect();

    $allData = self::$dbc->prepare('SELECT * FROM users');
    $result = $allData->execute();
    $result = $allData->fetchAll(PDO::FETCH_ASSOC);

    $instance = null;
    if ($result) {
        $instance = new static($result);
    }
    return $instance;
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

