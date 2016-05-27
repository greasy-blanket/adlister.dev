<?php
require('../../utils/Input.php');
require('../../models/User.php');



$errors = [];

($_POST && !Input::has('name')) ? array_push($errors, 'Name empty') : null;
echo 'first one';
var_dump($_POST);
    if (Input::has('name') && Input::has('username')&& Input::has('password') && Input::has('confirmPassword') && Input::has('email')) {
        // $user = $dbc->prepare('INSERT INTO users (name, username, password, email) VALUES (:name, :username, :password, :email)');
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
            header('location:adlister.dev/users/login.php');
            die;
        }
        var_dump($errors);
    }    
?>



<html>
<head>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

    <title>Create New User</title>
</head>
<body>
<center>Creating A New User</center>    
<div class="row">
    <div class="col s12 m6 l4 offset-m3 offset-l4">
        <form class="col s12" action="temp-newUserLogin.php" method="POST">
          <div class="row">
            <div class="input-field">
              <input placeholder="Full Name" name='name' id="name" type="text" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input placeholder="Username" name='username' id="username" type="text" class="validate">
            </div>
          </div>   
          <div class="row">
            <div class="input-field">
              <input placeholder="Password" name='password' id="password" type="password" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input placeholder="Confirm Password" name='confirmPassword' id="confirmPassword" type="password" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input placeholder="Email" name='email' id="email" type="email" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="col s12 m8 l4 offset-m2 offset-l4">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
            </div>
          </div>
        </form>
    </div>
</div>

</body>
</html>
