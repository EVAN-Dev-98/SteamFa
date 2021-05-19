<?php
get_template("head","",$title);
?>
<body>
<!-- Header -->
<header id="header">
    <section class="panel-header">
        <nav class="left">
            <ul>
                <li class="close"><a href="<?php echo controller("do-logout.php"); ?>"><i class="fad fa-times-hexagon"></i>خروج</a></li>
                <li><a href="<?php echo account("dashboard.php"); ?>"><i class="fad fa-user-tie"></i><?php if (isset($fname)) echo $fname; if (isset($lname)) echo " " . $lname; ?></a></li>
                <li><a href="<?php echo view("home.php"); ?>" target="_steamfa"><i class="fad fa-eye"></i>مشاهده سایت</a></li>
            </ul>
        </nav>
    </section>
</header>
