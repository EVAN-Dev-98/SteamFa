<?php
global $active;
?>
<aside class="panel-sidebar" id="aside">
    <ul>
        <li class="items <?php if (isset($active) && $active == "dashboard.php") echo "active"; ?>"><h1><a href="<?php echo_account("dashboard.php"); ?>">داشبورد</a></h1></li>
        <li class="items <?php if (isset($active) && $active == "profile-user.php") echo "active"; ?>"><a href="<?php echo_account("profile-user.php"); ?>">پروفایل</a></li>
        <li class="items <?php if (isset($active) && $active == "show-users.php") echo "active"; ?>"><a href="<?php echo_account("show-users.php"); ?>">مدیریت کاربران</a></li>
        <li class="items <?php if (isset($active) && $active == "show-product-list.php") echo "active"; ?>"><a href="<?php echo_account("show-product-list.php"); ?>">محصولات</a></li>
        <li class="items <?php if (isset($active) && $active == "add-product.php") echo "active"; ?>"><a href="<?php echo_account("add-product.php"); ?>">افزودن محصول</a></li>
        <li class="items <?php if (isset($active) && $active == "show-messages.php") echo "active"; ?>"><a href="<?php echo_account("show-messages.php"); ?>">پیام های تماس با ما</a></li>
    </ul>
</aside>