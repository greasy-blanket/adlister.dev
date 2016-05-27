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
            $main_view = '../views/home.php';
            break;

        case ('/user/account'):
            $main_view = '../views/users/account.php';
            break;

        case ('/user/edit'):
            $main_view = '../views/users/edit.php';
            break;

        case ('/user/login'):
            $main_view = '../views/users/login.php';
            break;

        case ('/user/signup'):
            $main_view = '../views/users/signup.php';
            createNewUser();
            break;

        case '/ads':
            $main_view = '../views/ads/index.php';

            break;

        case '/ads/create':
            $main_view = '../views/ads/create.php';

            break;
        case '/ads/edit':
            $main_view = '../views/ads/edit.php';
            //$data['ads'] = getAllAdsHelperFunctionVerboseName();
            //$data['somethingelse'] = myOtherSuperLongHelperFunctionName();
            break;

        case '/ads/show':
            $main_view = '../views/ads/show.php';

            break;

        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;

    return $data;
}

extract(pageController());
