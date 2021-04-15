<?php
get_view("head","",$title);
?>
<body>
<!-- Header -->
<header id="header">
 <section class="top-header">
    <nav class="right">
       <ul>
          <li><a href="">تبلیغات</a></li>
          <li><a href="">استخدام</a></li>
       </ul>
    </nav>
    <nav class="left">
       <ul>
          <li><a href="<?php echo_public("about.php"); ?>">درباره ما</a></li>
          <li><a href="<?php echo_public("contact.php"); ?>">تماس با ما</a></li>
       </ul>
    </nav>
 </section>
 <section class="main-header">
    <section class="hamburger-menu" id="hamburger-menu">
        <?php include 'main_menu.php'; ?>
    </section>
    <section class="hamburger-menu-icon" id="hamburger-menu-icon"></section>
    <script>
       var icon = document.getElementById('hamburger-menu-icon');
       var menu = document.getElementById('hamburger-menu');
       icon.addEventListener('click',()=>{
          menu.classList.toggle('active');
       });
    </script>
    <section class="logo">
       <a href="<?php echo_public("index.php"); ?>"><img src="<?php echo_assets("images/steam-icon.png"); ?>" alt="steamfarsi"></a>
    </section>
    <section class="site-name">
       <a href="<?php echo_public("index.php"); ?>">
          <h1>استیم فارسی</h1>
       </a>
    </section>
    <nav class="right">
        <?php include 'main_menu.php'; ?>
    </nav>
    <nav class="left">
       <ul>
          <li class="account"><a href="<?php echo_manager("login.php"); ?>" target="_steamfapanel">ورود</a></li>
          <li class="account"><a href="<?php echo_manager("register.php"); ?>" target="_steamfapanel">ثبت نام</a></li>
          <li class="account"><a href="<?php echo_manager("index.php"); ?>" target="_steamfapanel">پنل کاربری</a></li>
          <li class="search"><input class="search-input" type="text" name="search" value="" placeholder="دنبال چی میگردی ؟" onfocus="this.placeholder=''" onblur="this.placeholder='دنبال چی میگردی ؟'"></li>
          <li class="search-icon"><a href="#footer_search"></a></li>
       </ul>
    </nav>
 </section>
</header>