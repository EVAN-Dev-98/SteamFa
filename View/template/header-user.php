<?php
if ( Authentication::check() ) {
    global $db;
    $db = new DB();
    $table = User::find("id = {$_SESSION['uid']}");
    $row = $table[0];
    ?>
    <li class="account"><a href="<?php echo account("dashboard.php"); ?>" target="_steamfapanel"><i class="fad fa-user-tie"></i><?php echo "{$row['fname']} {$row['lname']}"; ?></a></li>
    <?php
}
else{
    ?>
    <li class="account"><a href="<?php echo account("sign-in.php"); ?>" target="_steamfasign"><i class="fad fa-sign-out-alt"></i>ورود</a></li>
    <li class="account"><a href="<?php echo account("sign-up.php"); ?>" target="_steamfasign"><i class="fad fa-user-plus"></i>ثبت نام</a></li>
    <?php
}
?>