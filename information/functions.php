<?php
include 'DB.php';

if (!function_exists('alert')) {
    function alert($text, $des, $type)
    {
        $alert = "<section class=\"alert alert-{$type} alert-dismissible fade show\" role=\"alert\">
  <strong class='me-3'>{$text}</strong> {$des}
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</section>";
        return $alert;
    }
}

if (!function_exists('alerts')) {
    function alerts($text = '' , $des = '' , $type = 'danger'){
        static $alerts = '';
        if ($text != ''){
            $alerts .= alert($text,$des,$type);
        }
        elseif ($alerts != ''){
            $result = $alerts;
            $alerts = '';
            return $result;
        }
        else
            return false;
    }
}


if (!function_exists('redirect')){
    function redirect ($address){
        header("location:{$address}");
        exit();
    }
}