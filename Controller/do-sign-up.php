<?php
/* Created By Evan ( Sajad Gholami ) */
include "__php__.php";

// get values from html
if (isset($_POST['submit'])){
    if ( Validation::Token_Check( $_POST['csrf_token'] )) {
        unset($_POST['csrf_token']);
        unset($_SESSION['CSRF_Token']);
        $params = SafeScript($_POST);
        if ( isset( $params['captcha'] )){
            $form = new sign_up(controller("do-sign-up.php"),"ثبت نام",null,"w-100 btn-lg","my-3");
            if ( $form -> valid ){
                $db = new DB();
                $table = User::find("email = '{$params['email']}'");
                if ( !isset($table[0]) ){ // if not find inserted email
                    if ($params['password'] === $params['re-password']){ // password and re-password is true
                        $params['password'] = password_hash($params['password'],PASSWORD_DEFAULT);
                        unset($params['submit']);
                        unset($params['re-password']);
                        unset($params['captcha']);
                        $uid = User::add($params);
                        Authentication::login( $uid );
                        Alert::alerts("{$params['fname']} {$params['lname']} عزیز ، خوش آمدید!","","success");
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
                    else{
                        Alert::alerts("گذرواژه با تکرار آن برابر نیست !");
                        $_SESSION['ins-params'] = $params;
                        redirect(account("sign-up.php"));
                    }
                }
                else{
                    Alert::alerts("ایمیل وارد شده در سیستم وجود دارد!","<a href='".account("sign-in.php")."'>وارد شوید</a>","info");
                    $_SESSION['ins-params'] = $params;
                    redirect(account("sign-up.php"));
                }
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
redirect(account("sign-up.php"));