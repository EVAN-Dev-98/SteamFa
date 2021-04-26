<?php
/* Created By Evan ( Sajad Gholami ) */

include "DB.php";

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

if (!function_exists("get_view")){
    function get_view($name , $addition = "" , $title = "استیم فارسی | عنوان ندارد"){
        if (!$addition == ""){
            $addition = "-{$addition}";
        }
        include "__php__.php";
        $address = "{$root}views/{$name}{$addition}.php";
        include ($address);
    }
}

if (!function_exists("echo_assets")){
    function echo_assets($name){
        include "__php__.php";
        $address = $assets . $name;
        echo $address;
    }
}

if (!function_exists("echo_manager")){
    function echo_manager($name){
        include "__php__.php";
        $address = $manager . $name;
        echo $address;
    }
}

if (!function_exists("echo_engine")){
    function echo_engine($name){
        include "__php__.php";
        $address = $engine . $name;
        echo $address;
    }
}

if (!function_exists("echo_public")){
    function echo_public($name){
        include "__php__.php";
        $address = $public . $name;
        echo $address;
    }
}