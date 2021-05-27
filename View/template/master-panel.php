<?php
/* Created By Evan ( Sajad Gholami ) */
require $Controller . "Panel-Authentication-Check.php";
//get_controller("Panel","Authentication-Check");
get_template("head","",$title);
?>
<body>
<?php
get_template("header","panel",null,$row);
get_template("sidebar","panel",null,$row);
main($row);
get_template("footer","panel");
?>
</body>