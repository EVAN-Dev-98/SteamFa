<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

if (!isset($_POST['submit'])) {
    Alert::alerts("دسترسی غیرمجاز!");
    redirect(view("home.php"));
}