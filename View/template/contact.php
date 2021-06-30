<?php
include "__php__.php";

$form = new Form(controller("do-contact.php"),"ارسال");
$form->form_title("فرم تماس با ما");
$form->text("name","نام شما","required pattern='.{2,}'",null,null,"ترجیحاً فارسی!");
$form->email("email","ایمیل","required");
$form->text("subject","موضوع پیام","required pattern='.{2,}'");
$form->text_area("message","پیام شما","required pattern='.{2,}'","3");
echo $form;