<?php
global $active;
?>
<aside class="panel-sidebar" id="aside">
    <ul>
        <li class="items"><img class="avatar" src="<?php echo assets("images/icons/user-1.png"); ?>" alt="user profile image" width="100px" height="100px"></li>
        <li class="items <?php if (isset($active) && $active == "dashboard.php") echo "active"; ?>"><h1><a href="<?php echo account("dashboard.php"); ?>">داشبورد</a></h1></li>
        <li class="items <?php if (isset($active) && $active == "profile-user.php") echo "active"; ?>"><a href="<?php echo account("profile-user.php"); ?>">پروفایل</a></li>
        <li class="items <?php if (isset($active) && $active == "show-users.php") echo "active"; ?>"><a href="<?php echo account("show-users.php"); ?>">مدیریت کاربران</a></li>
        <li class="items <?php if (isset($active) && $active == "show-product-list.php") echo "active"; ?>"><a href="<?php echo account("show-product-list.php"); ?>">محصولات</a>
            <ul>
                <li><a href="">افزودن آیتم</a></li>
                <li><a href="">افزودن بازی</a></li>
                <li><a href="">افزودن گیفت کارت</a></li>
            </ul>
        </li>
        <li class="items <?php if (isset($active) && $active == "show-messages.php") echo "active"; ?>"><a href="<?php echo account("show-messages.php"); ?>">پیام های تماس با ما</a></li>
    </ul>
</aside>