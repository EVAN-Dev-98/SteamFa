<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<aside class="panel-sidebar" id="aside">
    <a href="<?php ?>" class="brand-link"><img src="<?php echo assets("images/steam-icon.png") ?>" alt="steamfa" class="brand-img">استیم فارسی</a>
    <section class="user-panel">
        <img src="<?php echo assets("images/icons/user-1.png") ?>" alt="user-image" class="user-img">
        <a href="<?php ?>" class="user-info">سجاد غلامی</a>
    </section>
    <nav>
        <ul>
            <li class="items<?php if ($activePage == "dashboard") echo " active"; ?>"><a href="<?php echo account("dashboard.php"); ?>"><i class="fas fa-tachometer-alt"></i><p>داشبورد</p></a></li>
            <li class="items<?php if ($activePage == "profile-user") echo " active"; ?>"><a href="<?php echo account("profile-user.php"); ?>"><i class="fad fa-user-tie"></i></i><p>پروفایل</p></a></li>
            <li class="items<?php if ($activePage == "show-users") echo " active"; ?>"><a href="<?php echo account("show-users.php"); ?>"><i class="fas fa-users-crown"></i><p>مدیریت کاربران</p></a></li>
            <li class="items<?php if ($activePage == "show-product-list" || $activePage == "add-product" /* and 2 more */) echo " active"; ?>"><a href="#" onclick="show()"><i class="fad fa-store"></i><p>محصولات</p><i class="fas fa-angle-right icon-more"></i></a>
                <ul class="more<?php if ($activePage == "show-product-list" || $activePage == "add-product" /* and 2 more */) echo " show"; ?>">
                    <li class="items<?php if ($activePage == "add-product") echo " active"; ?>"><a href="<?php echo account("add-product.php"); ?>"><i class="fad fa-cart-plus"></i><p>افزودن آیتم</p></a></li>
                    <li class="items<?php if ($activePage == "") echo " active"; ?>"><a href="#"><i class="fad fa-cart-plus"></i><p>افزودن بازی</p></a></li>
                    <li class="items<?php if ($activePage == "") echo " active"; ?>"><a href="#"><i class="fad fa-cart-plus"></i><p>افزودن گیفت کارت</p></a></li>
                    <li class="items<?php if ($activePage == "show-product-list") echo " active"; ?>"><a href="<?php echo account("show-product-list.php"); ?>"><i class="fas fa-table"></i><p>مشاهده محصولات</p></a></li>
                </ul>
            </li>
            <li class="items<?php if ($activePage == "show-messages") echo " active"; ?>"><a href="<?php echo account("show-messages.php"); ?>"><i class="far fa-envelope"></i><p>پیام های تماس با ما</p></a></li>
        </ul>
    </nav>
</aside>
<script src="<?php echo assets("js/sidebar-panel.js") ?>"></script>