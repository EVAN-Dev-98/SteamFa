<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
switch ($role_id){
    case 1:
        $role_name = "مدیریت";
        break;
    case 2:
        $role_name = "ادمین";
        break;
    case 3:
        $role_name = "کاربر معتبر";
        break;
    case 4:
        $role_name = "کاربر عادی";
        break;
    default:
        $role_name = "تعیین نشده";
        break;
}
?>
<aside class="panel-sidebar" id="aside">
    <a href="<?php ?>" class="brand-link"><img src="<?php echo assets("images/steam-icon.png") ?>" alt="steamfa" class="brand-img">استیم فارسی</a>
    <section class="user-panel">
        <img src="<?php echo assets("images/icons/user-1.png") ?>" alt="user-image" class="user-img">
        <a href="<?php ?>" class="user-info"><?php if (isset($fname)) echo $fname; if (isset($lname)) echo " " . $lname; ?></a>
        <p class="user-role">سطح کاربری : <?php echo $role_name; ?></p>
    </section>
    <nav>
        <ul>
            <li class="items<?php if ($activePage == "dashboard") echo " active"; ?>"><a href="<?php echo account("dashboard.php"); ?>"><span class="fas fa-tachometer-alt"></span><p>داشبورد</p></a></li>
            <li class="items<?php if ($activePage == "profile-user") echo " active"; ?>"><a href="<?php echo account("profile-user.php"); ?>"><span class="fad fa-user-tie"></span><p>پروفایل</p></a></li>
            <li class="items<?php if ($activePage == "show-users") echo " active"; ?>"><a href="<?php echo account("show-users.php"); ?>"><span class="fas fa-users-crown"></span><p>مدیریت کاربران</p></a></li>
            <li class="items menu<?php if ($activePage == "show-product-list" || $activePage == "add-product" /* and 2 more */) echo " menu-active"; ?>"><a href="javascript:void(0)"><span class="fad fa-store"></span><p>محصولات</p><span class="fas fa-angle-right icon-more"></span></a>
                <ul class="more<?php if ($activePage == "show-product-list" || $activePage == "add-product" /* and 2 more */) echo " show"; ?>">
                    <li class="items<?php if ($activePage == "add-product") echo " active"; ?>"><a href="<?php echo account("add-product.php"); ?>"><span class="fad fa-cart-plus"></span><p>افزودن آیتم</p></a></li>
                    <li class="items<?php if ($activePage == "") echo " active"; ?>"><a href="#"><span class="fad fa-cart-plus"></span><p>افزودن بازی</p></a></li>
                    <li class="items<?php if ($activePage == "") echo " active"; ?>"><a href="#"><span class="fad fa-cart-plus"></span><p>افزودن گیفت کارت</p></a></li>
                    <li class="items<?php if ($activePage == "show-product-list") echo " active"; ?>"><a href="<?php echo account("show-product-list.php"); ?>"><span class="fas fa-table"></span><p>مشاهده محصولات</p></a></li>
                </ul>
            </li>
            <li class="items menu<?php if ($activePage == "") echo " menu-active"; ?>"><a href="javascript:void(0)"><span class="far fa-shield-alt sec"></span><p>امنیت</p><span class="fas fa-angle-right icon-more"></span></a>
                <ul class="more">
                    <li class="items<?php if ($activePage == "") echo " active"; ?>"><a href="#"><span class="fad fa-key"></span><p>تغییر گذرواژه</p></a></li>
                    <li class="items<?php if ($activePage == "") echo " active"; ?>"><a href="#"><span class="fad fa-eye"></span><p>مجوز ها</p></a></li>
                </ul>
            </li>
            <li class="items<?php if ($activePage == "show-messages") echo " active"; ?>"><a href="<?php echo account("show-messages.php"); ?>"><span class="far fa-envelope"></span><p>پیام های تماس با ما</p></a></li>
            <li class="items close"><a href="<?php echo controller("do-logout.php"); ?>"><span class="fad fa-times-hexagon"></span><p>خروج</p></a></li>
        </ul>
    </nav>
</aside>
<script src="<?php echo assets("js/sidebar-panel.js") ?>"></script>