<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

// get values from html
if (isset($_POST['submit'])){
    if ( Validation::Token_Check( $_POST['csrf_token'] )) {
        unset($_POST['csrf_token']);
        unset($_SESSION['CSRF_Token']);
        $params = SafeScript($_POST);
        $params = BlockSqlInjection($params);
        if ( isset( $params['captcha'] )){
            $form = new sign_in(controller("do-sign-in.php"),"ورود",$params,"w-100 btn-lg","my-3");
            if ( $form -> valid ){
                $db = new DB();
                $table = User::find("email = '{$params['email']}'");
                unset($db);
                if (isset($table[0])){ // email and password is true
                    $row = $table[0];
                    if ( password_verify($params['password'],$row['password'])){
                        Authentication::login( $row["id"] );
                        Alert::alerts("{$row['fname']} {$row['lname']} عزیز ، خوش آمدید!","","success");
                        if (isset($_SESSION['redirect'])){
                            $redirect = $_SESSION['redirect'];
                            unset($_SESSION['redirect']);
                            if ($redirect == view("home") || $redirect == view("../index")){
                                redirect(account("dashboard.php"));
                            }
                            else
                                redirect($redirect);
                        }
                        else
                            redirect(account("dashboard.php"));
                    }
                    else
                        Alert::alerts("نام کاربری یا کلمه عبور صحیح نمی باشد !");
                }
                else
                    Alert::alerts("ایمیل وارد شده در سیستم وجود ندارد!","<a href='".account("sign-up.php")."'>ثبت نام کنید</a>","info");
            }
            else
                $_SESSION['params'] = $params;
            unset($db);
        }
        else
            Alert::alerts("مقدار تصویر نامعتبر!");
    }
    else
        Alert::alerts("توکن CSRF نامعتبر!");
}
else
    Alert::alerts("دسترسی غیرمجاز!");
redirect(account("sign-in.php"));