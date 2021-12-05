<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
$role_name = role_name( $role_id );
if (empty($steamid)) {
    $steam_status = 'عدم اتصال';
    $steam_status_b = false;
} else {
    $steam_status = 'متصل';
    $steam_status_b = true;
    $user_info = new User_Info($steamid);
}
?>
<aside class="col-auto col-sm-4 col-md-3 col-xl-3 col-xxl-2 p-0 panel-sidebar" id="aside">
    <section class="user-panel">
        <img src="<?php if ($steam_status_b) echo $user_info->steamprofile['avatarfull']; else echo assets("images/icons/user-1.png"); ?>" alt="user-image" class="user-img">
        <a href="<?php ?>" class="user-info"><?php if (isset($fname)) echo $fname; if (isset($lname)) echo " " . $lname; if ($steam_status_b) echo ' ( ' . $user_info->steamprofile['personaname'] .' )'; ?></a>
        <p class="user-role">سطح کاربری : <?php echo $role_name; ?></p>
        <section class="user-steam-check"><p>اتصال به استیم :</p><p style="padding-right: .2rem;<?php if ($steam_status_b) echo 'color:#2ECC71;'; else echo 'color:#E74C3C;'; ?>"><?php echo $steam_status; ?></p></section>
    </section>
    <nav>
        <ul>
            <li class="items<?php if ($activePage == "dashboard") echo " active"; ?>"><a href="<?php echo account("dashboard.php"); ?>"><span class="fas fa-tachometer-alt"></span><p>داشبورد</p></a></li>
            <li class="items<?php if ($activePage == "profile-user") echo " active"; ?>"><a href="<?php echo account("profile-user.php"); ?>"><span class="fad fa-user-tie"></span><p>پروفایل</p></a></li>
            <?php
            if ( Authorization::check( "UserViewOther" ) ) { ?>
                <li class="items<?php if ($activePage == "show-users") echo " active"; ?>"><a href="<?php echo account("show-users.php"); ?>"><span class="fas fa-users-crown"></span><p>مدیریت کاربران</p></a></li>
                <?php } ?>
            <li class="items menu<?php if ($activePage == "item-list" || $activePage == "add-item" || $activePage == "all-item-list" || $activePage == "add-game" || $activePage == "add-gift-card" || $activePage == "product_liked" || $activePage == "product_bookmarked" ) echo " menu-active"; ?>"><a href="javascript:void(0)"><span class="fad fa-store"></span><p>محصولات</p><span class="fas fa-angle-right icon-more"></span></a>
                <ul class="more<?php if ($activePage == "item-list" || $activePage == "add-item" || $activePage == "all-item-list" || $activePage == "add-game" || $activePage == "add-gift-card" || $activePage == "product_liked" || $activePage == "product_bookmarked" ) echo " show"; ?>">
                    <?php if ( Authorization::check( "ItemAdd" ) ) { ?><li class="items<?php if ($activePage == "add-item") echo " active"; ?>"><a href="<?php echo account("add-item.php"); ?>"><span class="fad fa-cart-plus"></span><p>افزودن آیتم</p></a></li><?php } ?>
                    <?php if ( Authorization::check( "ProductAdd" ) ) { ?><li class="items<?php if ($activePage == "add-game") echo " active"; ?>"><a href="<?php echo account("add-game.php"); ?>"><span class="fad fa-cart-plus"></span><p>افزودن بازی</p></a></li><?php } ?>
                    <?php if ( Authorization::check( "ProductAdd" ) ) { ?><li class="items<?php if ($activePage == "add-gift-card") echo " active"; ?>"><a href="<?php echo account("add-gift-card.php"); ?>"><span class="fad fa-cart-plus"></span><p>افزودن گیفت کارت</p></a></li><?php } ?>
                    <?php if ( Authorization::check( "ItemAdd" ) ) { ?><li class="items<?php if ($activePage == "item-list") echo " active"; ?>"><a href="<?php echo account("item-list.php"); ?>"><span class="fas fa-table"></span><p>مشاهده آیتم های شما</p></a></li><?php } ?>
                    <?php if ( Authorization::check( "ItemViewOther" ) ) { ?><li class="items<?php if ($activePage == "all-item-list") echo " active"; ?>"><a href="<?php echo account("all-item-list.php"); ?>"><span class="fas fa-table"></span><p>مشاهده تمامی آیتم ها</p></a></li><?php } ?>
                    <li class="items<?php if ($activePage == "product_liked") echo " active"; ?>"><a href="<?php echo account("product_liked.php"); ?>"><span class="fas fa-heart"></span><p>لایک ها</p></a></li>
                    <li class="items<?php if ($activePage == "product_bookmarked") echo " active"; ?>"><a href="<?php echo account("product_bookmarked.php"); ?>"><span class="fas fa-bookmark"></span><p>بوکمارک ها</p></a></li>
                </ul>
            </li>
            <li class="items menu<?php if ($activePage == "change-password" || $activePage == "role-manager" || $activePage == "add-role" || $activePage == "edit-role" ) echo " menu-active"; ?>"><a href="javascript:void(0)"><span class="far fa-shield-alt sec"></span><p>امنیت</p><span class="fas fa-angle-right icon-more"></span></a>
                <ul class="more<?php if ($activePage == "change-password" || $activePage == "role-manager" || $activePage == "add-role" || $activePage == "edit-role" ) echo " show"; ?>">
                    <li class="items<?php if ($activePage == "change-password") echo " active"; ?>"><a href="<?php echo account("change-password.php"); ?>"><span class="fad fa-key"></span><p>تغییر گذرواژه</p></a></li>
                    <?php
                    if ( Authorization::check( "RoleMaster" ) ) { ?>
                        <li class="items<?php if ($activePage == "role-manager" || $activePage == "add-role" || $activePage == "edit-role" ) echo " active"; ?>"><a href="<?php echo account("role-manager.php"); ?>"><span class="fad fa-eye"></span><p>مجوز ها</p></a></li>
                        <?php } ?>
                </ul>
            </li>
            <?php if ( Authorization::check( "MessageViewOther" ) ) { ?><li class="items<?php if ($activePage == "show-messages") echo " active"; ?>"><a href="<?php echo account("show-messages.php"); ?>"><span class="far fa-envelope"></span><p>پیام های تماس با ما</p></a></li><?php } ?>
            <li class="items close"><a href="<?php echo controller("do-logout.php"); ?>"><span class="fad fa-times-hexagon"></span><p>خروج</p></a></li>
        </ul>
    </nav>
</aside>
<script src="<?php echo assets("js/sidebar-panel.js") ?>"></script>