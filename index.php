<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/php-native-login";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            require "login.php";
            break;
        case $me.'/login' :
                require "login.php";
                break;
        case $me.'/logout' :
            require "logout.php";
            break;
        case $me.'/admin/logout' :
                require "logout.php";
                break;
        case $me.'/dashboard' :
            require "dashboard.php";
            break; 
        case $me.'admin/dashboard' :
            require "admin/dashboard.php";
            break;
        // default:
        //     http_response_code(404);
        //     echo "404";
        //     break;
    }