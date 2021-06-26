<?php
include "__php__.php";

$form = new Form(controller("do-contact.php"),"ارسال");
$form->form_title("فرم تماس با ما");
$form->text("name","نام شما",null,null,null,"ترجیحاً فارسی!");
$form->email("email","ایمیل");
$form->text("subject","موضوع پیام");
$form->text_area("message","پیام شما","3");
echo $form;