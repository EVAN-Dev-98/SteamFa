<header>
    <h2>ویرایش اطلاعات کاربر <?php echo $fname . " " . $lname; ?></h2>
</header>
<main>
    <?php
    $alerts = Alert::alerts();
    if ($alerts) echo $alerts;
    if (isset($_SESSION['ins-params'])){
        $params = $_SESSION['ins-params'];
        unset($_SESSION['ins-params']);
        extract($params);
    }
    ?>
    <form action="<?php echo controller("do-edit-user.php"); ?>" method="post">
        <section class="input-group mb-3">
            <span class="input-group-text" id="id">شناسه کاربری</span>
            <input type="number" name="id" value="<?php echo $id; ?>" class="form-control text-start" aria-label="id" aria-describedby="id" readonly>
        </section>
        <section class="input-group mb-3">
            <span class="input-group-text">نام و نام خانوادگی</span>
            <input type="text" name="fname" value="<?php echo $fname; ?>" aria-label="name" class="form-control">
            <input type="text" name="lname" value="<?php echo $lname; ?>" aria-label="family" class="form-control">
        </section>
        <section class="input-group mb-3">
            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" aria-label="email" aria-describedby="email" readonly>
            <span class="input-group-text" id="email">ایمیل</span>
        </section>
        <section class="input-group mb-3">
            <span class="input-group-text" id="password">گذرواژه شما</span>
            <input type="password" name="password" class="form-control" aria-label="password" aria-describedby="password" required>
        </section>
        <section class="input-group mb-3">
            <span class="input-group-text">لینک پروفایل استیم</span>
            <input type="text" name="steam_url" value="<?php echo $steam_url; ?>" class="form-control dir-ltr">
            <span class="input-group-text dir-ltr">https://steamcommunity.com/id/</span>
        </section>
        <section class="input-group mb-3">
            <section class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="male" name="gender" id="male" <?php if ($gender === "male" ) { ?> checked <?php } ?>>
            </section>
            <label class="form-control" for="male">مرد</label>
            <section class="input-group-text">
                <input class="form-check-input mt-0" type="radio" value="female" name="gender" id="female" <?php if ($gender === "female" ) { ?> checked <?php } ?>>
            </section>
            <label class="form-control" for="female">زن</label>
        </section>
        <input type="submit" name="submit" value="ویرایش" class="btn btn-outline-primary">
    </form>
</main>