<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";
$title = "آیتم های دوتا 2 | استیم فارسی";
get_template("head","",$title);
?>
<body>
<?php
get_template("header");
get_controller("get","hero");
get_template("footer");
?>
</body>