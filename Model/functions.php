<?php
/* Created By Evan ( Sajad Gholami ) */
include "Alert.php";
include "DB/DB.php";
include "Security/Authentication.php";
include "Security/Authorization.php";

if (!function_exists("redirect")){
    function redirect ($address){
        header("location:{$address}");
        exit();
    }
}

function SafeScript($arg){  // against script injection
    if( is_array($arg) )
        foreach($arg as $key => $value)
            $arg[$key] = safeScript($value);
    else
        $arg = htmlspecialchars($arg);
    return $arg;
}

// for include maybe catalog.php in View folder
if (!function_exists("get_view")){
    function get_view($name , $addition = ""){
        if (!$addition == ""){
            $addition = "-{$addition}";
        }
        include "__php__.php";
        $address = "{$View}{$name}{$addition}.php";
        include ($address);
    }
}

// for include maybe header.php in View/template folder
if (!function_exists("get_template")){
    function get_template($name , $addition = "" , $title = "استیم فارسی | عنوان ندارد" , $args = array()){
        if (!$addition == ""){
            $addition = "-{$addition}";
        }
        include "__php__.php";
        extract($args);
        include "{$Template}{$name}{$addition}.php";
    }
}

// for include template part like product article and maybe message article
if (!function_exists("get_template_part")){
    function get_template_part($name , $addition = "" , $args = array()){
        if (!$addition == ""){
            $addition = "-{$addition}";
        }
        include "__php__.php";
        $include_path = "{$Template}{$name}{$addition}.php";
        extract($args);
        include ($include_path);
    }
}

// for include controller
if (!function_exists("get_controller")){
    function get_controller($name , $addition = ""){
        if (!$addition == ""){
            $addition = "-{$addition}";
        }
        include "__php__.php";
        global $db;
        include "{$Controller}{$name}{$addition}.php";
    }
}

// for echo address assets in folder like images
if (!function_exists("assets")){
    function assets( $name ){
        include "__php__.php";
        return $assets . $name;
    }
}

// for echo address assets in folder like images
if (!function_exists("controller")){
    function controller( $name ){
        include "__php__.php";
        return $controller . $name;
    }
}

// for echo address dashboard or maybe sign-in.php
if (!function_exists("account")){
    function account( $name ){
        include "__php__.php";
        return $account . $name;
    }
}

// for echo address view folder like catalog.php
if (!function_exists("view")){
    function view( $name ){
        include "__php__.php";
        return $view . $name;
    }
}

// for extract array to variables with key name
if (!function_exists("extract")){
    function extract( $args ){
        foreach ($args as $key => $value){
            $$key = htmlspecialchars($value);
        }
    }
}

if (!function_exists("Session_Starter")){
    function Session_Starter(){
        $LifeTime = 30 * 24 * 60 * 60 ;
        $path = '/';
        $secure = false;
        $httponly = true;
        session_set_cookie_params( $LifeTime , $path , DOMAIN , $secure , $httponly );
        session_start();
    }
}