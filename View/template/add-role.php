<?php
$table = Role::column_name();
$fields = array(
    "RoleMaster" => "تعیین مجوز",
    "ItemAdd" => "افزودن آیتم",
    "ItemEdit" => "ویرایش آیتم",
    "ItemDelete" => "حذف آیتم",
    "ItemViewOther" => "مشاهده آیتم دیگران",
    "ItemEditOther" => "ویرایش آیتم دیگران",
    "ItemDeleteOther" => "حذف آیتم دیگران",
    "ProductAdd" => "افزودن محصول",
    "ProductEdit" => "ویرایش محصول",
    "ProductDelete" => "حذف محصول",
    "ProductViewOther" => "مشاهده محصول دیگران",
    "ProductEditOther" => "ویرایش محصول دیگران",
    "ProductDeleteOther" => "حذف محصول دیگران",
    "UserAdd" => "افزودن کاربر",
    "UserEdit" => "ویرایش حساب",
    "UserDelete" => "حذف حساب",
    "UserViewOther" => "مشاهده کاربران",
    "UserEditOther" => "ویرایش کاربران",
    "UserDeleteOther" => "حذف کاربران",
    "MessageAdd" => "افزودن پیام",
    "MessageEdit" => "ویرایش پیام",
    "MessageDelete" => "حذف پیام",
    "MessageViewOther" => "مشاهده پیام دیگران",
    "MessageEditOther" => "ویرایش پیام دیگران",
    "MessageDeleteOther" => "حذف پیام دیگران"
);

?>
<header>
    <h2>افزودن مجوز</h2>
</header>
<main>
<form action="<?php echo controller("do-add-role.php"); ?>" method="post" class="user_select_n">
    <section class="input-group mb-4">
        <span class="input-group-text">نام مجوز : </span>
        <input type="text" class="form-control" name="name" placeholder="به عنوان مثال : Admin" required>
    </section>
    <section class="row container mb-3">
<?php
foreach ($fields as $key => $field){
    ?>
    <section class="col-6 form-check form-switch mb-3 h4">
        <input class="form-check-input cursor_p" type="checkbox" name="<?php echo $key; ?>" id="<?php echo $key; ?>">
        <label class="form-check-label cursor_p" for="<?php echo $key; ?>"><?php echo $field; ?></label>
    </section>
    <?php
}
?>
    </section>
    <input type="submit" name="submit" value="افزودن مجوز" class="btn btn-primary">
</form>
</main>