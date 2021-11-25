<?php
captcha();
function captcha(){
    include "__php__.php";
    // Generation Random Code
    $md5_hash = md5(rand(0,999));
    $captcha = substr($md5_hash , 15 , 5);

    $_SESSION['captcha'] = $captcha;

    $width = 200;
    $height = 50;

    $image = ImageCreate($width,$height);

    // Colors
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $green = imagecolorallocate($image, 72, 201, 176);
    $red = imagecolorallocate($image, 231, 76, 60);
    $asphalt = imagecolorallocate($image, 47, 53, 66);
    $yellow = imagecolorallocate($image, 255, 193, 7);

    // Making Background
    imagefill($image, 0, 0, $asphalt);
    // Carving Text into the image 
    $font = $Assets . "fonts/" . "captcha.ttf";
    imagettftext($image, 25, 10, 45, 45, $yellow, $font, $captcha);
    // Informing Browser is a jpeg image file
    header("Content-Type: image/jpeg");
    // Converting Image into JPEG
    imagejpeg($image);
    // Clearing Cache
    imagedestroy($image);
}
?>