<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {

        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {

        $request = $_SERVER['REQUEST_URI'];
    }


    // switch that will run functions and setup variables dependent on what route was accessed

    //############### Make Title a $title key; ###################

    switch ($request) {
        case ('/'):
            $data['title'] = 'Adlister';
            $main_view = '../views/home.php';
            break;

        case ('/user/account'):
            $data['title'] = 'Account';
            $main_view = '../views/users/account.php';
            break;

        case ('/user/edit'):
            $data['title'] = 'Edit Account';
            $main_view = '../views/users/edit.php';
            $data['user'] = getUserInfo();

            break;

        case ('/user/login'):
            $data['title'] = 'Login';
            $main_view = '../views/users/login.php';
            logInUser();
            break;

        case ('/user/signup'):
            $data['title'] = 'Sign Up';
            $main_view = '../views/users/signup.php';
            createNewUser();
            break;

        case ('/logout'):
            $data['title'] = 'LogOut';
            $main_view = '../views/users/logout.php';
            userLogout();
            break;

        case '/ads':
            $data['title'] = 'Adlister | Ads';
            $main_view = '../views/ads/index.php';

            break;

        case '/ads/create':
            $data['title'] = 'Create';
            $main_view = '../views/ads/create.php';
            createNewAd();
            break;

        case '/ads/edit':
            $data['title'] = 'Adlist Edit';
            $main_view = '../views/ads/edit.php';
            updateAd();
            break;

        case '/ads/show':
            $data['title'] = 'Adlist | Info';
            $main_view = '../views/ads/show.php';

            break;

        case '/ads/delete':
            $data['title'] = 'Adlist | Delete Ad';
            $main_view = '../views/ads/delete.php';
            break;

        default:
            $data['title'] = 'Adlist 404';    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());
