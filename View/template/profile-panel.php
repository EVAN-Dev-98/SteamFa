<?php
global $row;
global $alerts;
?>
<section class="panel">
    <header>
        <h2>ویرایش اطلاعات</h2>
    </header>
    <main>
        <?php
        if (isset($alerts))
            echo $alerts;
        ?>
        <form action="<?php echo_controller("edit-user.php"); ?>?id=<?php if (isset($_GET['id'])) echo $_GET['id']; ?>" method="post">
            <section class="input-group mb-3">
                <span class="input-group-text">نام و نام خانوادگی</span>
                <input type="text" name="name" value="<?php if (isset($row['name'])) echo $row['name']; ?>" aria-label="name" class="form-control">
                <input type="text" name="family" value="<?php if (isset($row['family'])) echo $row['family']; ?>" aria-label="family" class="form-control">
            </section>
            <section class="input-group mb-3">
                <input type="email" name="email" value="<?php if (isset($row['email'])) echo $row['email']; ?>" class="form-control" aria-label="email" aria-describedby="email" readonly>
                <span class="input-group-text" id="email">ایمیل</span>
            </section>
            <section class="input-group mb-3">
                <span class="input-group-text" id="password">گذرواژه</span>
                <input type="password" name="password" class="form-control" aria-label="password" aria-describedby="password">
            </section>
            <section class="input-group mb-3">
                <span class="input-group-text">لینک پروفایل استیم</span>
                <input type="text" name="steam_url" value="<?php if (isset($row['steam_url'])) echo $row['steam_url']; ?>" class="form-control dir-ltr">
                <span class="input-group-text dir-ltr">https://steamcommunity.com/id/</span>
            </section>
            <section class="input-group mb-3">
                <section class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="male" name="gender" id="male" <?php if (isset($row['gender'])) { if ($row['gender'] == "male" ) { ?> checked <?php } } ?>>
                </section>
                <label class="form-control" for="male">مرد</label>
                <section class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="female" name="gender" id="female" <?php if (isset($row['gender'])) { if ($row['gender'] == "female" ) { ?> checked <?php } } ?>>
                </section>
                <label class="form-control" for="female">زن</label>
            </section>
            <input type="submit" name="submit" value="ویرایش" class="btn btn-outline-primary">
        </form>
    </main>
</section>
