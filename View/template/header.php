<?php
get_template("head","",$title);
?>
<body>
<!-- Header -->
<header id="header">
 <section class="top-header">
    <nav class="right">
       <ul>
          <li><a href="#" target="_steamfa">آموزش های استیم</a></li>
       </ul>
    </nav>
    <nav class="left">
       <ul>
          <li><a href="<?php echo view("about.php"); ?>" target="_steamfa">درباره ما</a></li>
          <li><a href="<?php echo view("contact.php"); ?>" target="_steamfa">تماس با ما</a></li>
       </ul>
    </nav>
 </section>
 <section class="main-header">
    <section class="hamburger-menu" id="hamburger-menu">
        <ul>
            <?php get_template("header","user"); ?>
            <li class="search"><input class="search-input" type="text" name="search" value="" placeholder="دنبال چی میگردی ؟" onfocus="this.placeholder=''" onblur="this.placeholder='دنبال چی میگردی ؟'"></li>
        </ul>
        <?php get_template("main","menu"); ?>
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
       <a href="<?php echo view("home.php"); ?>"><img src="<?php echo assets("images/steam-icon.png"); ?>" alt="steamfarsi"></a>
    </section>
    <section class="site-name">
       <a href="<?php echo view("home.php"); ?>">
          <h1>استیم فارسی</h1>
       </a>
    </section>
    <nav class="right">
        <?php get_template("main","menu"); ?>
    </nav>
    <nav class="left">
       <ul>
           <?php get_template("header","user"); ?>
          <li class="search"><input class="search-input" type="text" name="search" value="" placeholder="دنبال چی میگردی ؟" onfocus="this.placeholder=''" onblur="this.placeholder='دنبال چی میگردی ؟'"></li>
       </ul>
    </nav>
 </section>
</header>