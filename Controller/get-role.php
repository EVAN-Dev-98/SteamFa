<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!Authorization::check("RoleMaster")){
    Alert::alerts("متاسفانه شما مجوز مشاهده مجوز ها را ندارید!");
    redirect(account("dashboard.php"));
}

$db = new DB();
$table = Role::find("true","id");
?>
<header>
    <h2>مشاهده مجوز ها</h2>
</header>
<main>
    <?php
    $alerts = Alert::alerts();
    if ($alerts) echo $alerts;
    ?>
    <a href="<?php echo account("add-role.php"); ?>" class="btn btn-outline-primary mb-3">افزودن مجوز</a>
    <table class="table table-dark table-hover text-center">
        <thead>
        <tr>
            <th scope="col">نام مجوز</th>
            <th scope="col">تعداد اعضاء</th>
            <th scope="col">حذف</th>
            <th scope="col">ویرایش</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($table as $row){
            get_template_part("roles","template",$row);
        }
        ?>
        </tbody>
    </table>
</main>