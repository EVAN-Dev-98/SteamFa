<?php
if ( Authentication::check() ) {
    global $db;
    $db = new DB();
    $table = User::find("id = {$_SESSION['uid']}");
    $row = $table[0];
    ?>
    <li class="nav-item"><a class="nav-link" href="<?php echo account("dashboard.php"); ?>" target="_steamfapanel"><span class="fad fa-user-plus"></span><?php echo "{$row['fname']} {$row['lname']}"; ?></a></li>
    <?php
}
else{
    ?>
    <li class="nav-item"><a class="nav-link" href="<?php echo account("sign-up.php"); ?>" target="_steamfasign"><span class="fad fa-sign-out-alt"></span>ثبت نام</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo account("sign-in.php"); ?>" target="_steamfasign"><span class="fad fa-user-plus"></span>ورود</a></li>
    <?php
}
?>