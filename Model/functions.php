<?php
/* Created By Evan ( Sajad Gholami ) */

include "DB/DB.php";

if (!function_exists("alert")) {
    function alert($text, $des, $type)
    {
        $alert = "<section class=\"alert alert-{$type} alert-dismissible fade show\" role=\"alert\">
  <strong class='me-3'>{$text}</strong> {$des}
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</section>";
        return $alert;
    }
}

if (!function_exists("alerts")) {
    function alerts($text = "" , $des = "" , $type = "danger"){
        static $alerts = "";
        if ($text != ""){
            $alerts .= alert($text,$des,$type);
        }
        elseif ($alerts != ""){
            $result = $alerts;
            $alerts = "";
            return $result;
        }
        else
            return false;
    }
}


if (!function_exists("redirect")){
    function redirect ($address){
        header("location:{$address}");
        exit();
    }
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
    function get_template($name , $addition = "" , $title = "استیم فارسی | عنوان ندارد"){
        if (!$addition == ""){
            $addition = "-{$addition}";
        }
        include "__php__.php";
        $address = "{$Template}{$name}{$addition}.php";
        include ($address);
    }
}

// for echo address assets in folder like images
if (!function_exists("echo_assets")){
    function echo_assets($name){
        include "__php__.php";
        $address = $assets . $name;
        echo $address;
    }
}

// for echo address assets in folder like images
if (!function_exists("echo_controller")){
    function echo_controller($name){
        include "__php__.php";
        $address = $controller . $name;
        echo $address;
    }
}

// for echo address dashboard or maybe sign-in.php
if (!function_exists("echo_account")){
    function echo_account($name){
        include "__php__.php";
        $address = $account . $name;
        echo $address;
    }
}

// for echo address model folder like functions.php
if (!function_exists("echo_model")){
    function echo_model($name){
        include "__php__.php";
        $address = $model . $name;
        echo $address;
    }
}

// for echo address view folder like catalog.php
if (!function_exists("echo_view")){
    function echo_view($name){
        include "__php__.php";
        $address = $view . $name;
        echo $address;
    }
}