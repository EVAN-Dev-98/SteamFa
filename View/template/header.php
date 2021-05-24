<?php
get_template("head","",$title);
?>
<body>
<!-- Header -->
<header id="header">
    <nav class="navbar navbar-expand-sm navbar-dark bg-steamfa-1">
        <ul class="navbar-nav ms-4 me-sm-auto">
            <li class="nav-item"><a class="nav-link" href="#" target="_steamfa">آموزش</a></li>
            <li class="nav-item"><a class="nav-link" href="#" target="_steamfa">آیتم های ویژه</a></li>
        </ul>
        <ul class="navbar-nav me-4 text-end text-sm-start">
            <li class="nav-item"><a class="nav-link" href="<?php echo view("about.php"); ?>" target="_steamfa">درباره ما</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo view("contact.php"); ?>" target="_steamfa">تماس با ما</a></li>
        </ul>
    </nav>
    <nav class="navbar navbar-expand-xl navbar-dark bg-steamfa-2 py-3">
        <section class="container">
            <a class="navbar-brand" href="<?php echo view("home.php"); ?>">
                <img class="me-2" src="<?php echo assets("images/steam-icon.png"); ?>" width="40" height="40" alt="steamfarsi"><span>استیم فارسی</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#HeaderNavbar" aria-controls="HeaderNavbar" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <section class="navbar-collapse collapse" id="HeaderNavbar" style="">
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo view("home.php"); ?>" target="_steamfa">صفحه اصلی</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo view("catalog.php"); ?>" target="_steamfa">فروشگاه</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">آیتم های دوتا 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">آیتم های کانتر</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">فروشگاه بازی</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">گیفت کارت</a></li>
                </ul>
                <ul class="navbar-nav me-lg-2 mb-2 mb-lg-0 text-center">
                    <?php get_template("header","user"); ?>
                </ul>
                <section class="search">
                    <input class="search-input" type="text" name="search" value="" placeholder="دنبال چی میگردی ؟" onfocus="this.placeholder=''" onblur="this.placeholder='دنبال چی میگردی ؟'">
                </section>
            </section>
        </section>
    </nav>
</header>