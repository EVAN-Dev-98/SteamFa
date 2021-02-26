<?php
/* Created By Evan ( Sajad Gholami ) */
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" href='<?php if (isset($path)) echo $path ?>Images/steam-icon.png' type="images/png" sizes="16*16">
    <link rel="stylesheet" href="<?php if (isset($path)) echo $path ?>Theme/style.css">
    <title><?php if (isset($title)) echo $title; else echo "عنوان ندارد"; ?></title>
</head>
<body>
<!-- Header -->
<header>
    <!-- TOP Header -->
    <section class="container-fluid bg-steamfa1">
        <nav class="navbar navbar-expand-sm navbar-dark d-inline-block">
            <ul class="navbar-nav px-2">
                <li class="nav-item"><a class="nav-link" href="">تبلیغات</a></li>
                <li class="nav-item"><a class="nav-link" href="">استخدام</a></li>
            </ul>
        </nav>
        <nav class="float-start navbar navbar-expand-sm navbar-dark d-inline-block">
            <ul class="navbar-nav px-2">
                <li class="nav-item"><a class="nav-link" href="">درباره ما</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php if (isset($path)) echo $path ?>Contact.php">تماس با ما</a></li>
            </ul>
        </nav>
    </section>
    <!-- MAIN Header -->
    <section class="container-fluid bg-steamfa2">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mx-3" href="<?php if (isset($path)) echo $path ?>index.php"><img src="<?php if (isset($path)) echo $path ?>Images/steam-icon.png" class="ms-3" alt="logo" width="40" height="40">استیم فارسی</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php if (isset($path)) echo $path ?>index.php">صفحه اصلی</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">منو اول</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">منو دوم</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            منو سوم
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark bg-steamfa2 text-center" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li class="d-block"><a class="dropdown-item" href="#">زیر منو اول</a></li>
                            <li class="d-block"><a class="dropdown-item" href="#">زیر منو دوم</a></li>
                            <li class="d-block"><a class="dropdown-item" href="#">زیر منو سوم</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</header>