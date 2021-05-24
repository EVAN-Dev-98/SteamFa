<?php
get_template("head","",$title);
?>
<body>
<!-- Header -->
<header id="header">
    <nav class="navbar navbar-expand-sm navbar-dark bg-steamfa-1 py-2">
        <ul class="navbar-nav ms-auto me-4">
            <li class="nav-item close mx-2"><a class="nav-link" href="<?php echo controller("do-logout.php"); ?>"><span class="fad fa-times-hexagon"></span>خروج</a></li>
            <li class="nav-item mx-2"><a class="nav-link" href="<?php echo account("dashboard.php"); ?>"><span class="fad fa-user-tie"></span><?php if (isset($fname)) echo $fname; if (isset($lname)) echo " " . $lname; ?></a></li>
            <li class="nav-item mx-2"><a class="nav-link" href="<?php echo view("home.php"); ?>" target="_steamfa"><span class="fad fa-eye"></span>مشاهده سایت</a></li>
        </ul>
    </nav>
</header>