<?php
/* Created By Evan ( Sajad Gholami ) */
/* Authentication Check */
$row = array();
if ( Authentication::check() ){
    global $db;
    $db = new DB();
    $table = User::find("id = {$_SESSION['uid']}");
    $row = $table[0];
}
else{
    Alert::alerts("ابتدا وارد سیستم شوید!");
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    redirect(account("sign-in.php"));
}
/* End Check */
get_template("head","",$title);
?>
<body>
<?php
get_template("header","panel",null,$row);
?>
<section class="row m-0 dir-rtl">
    <?php
    get_template("sidebar","panel",null,$row);
    ?>
    <section class="col panel shadow">
        <?php main($row); ?>
    </section>
</section>
<?php
get_template("footer","panel");
?>
</body>