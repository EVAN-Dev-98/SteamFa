<?php
/* Created By Evan ( Sajad Gholami ) */
if (!class_exists("sign_up")) {
    class sign_up extends Form {
        public function __construct($action, $submit = 'ثبت نام', $params = array(), $submit_class = '', $form_class = ''){
            parent::__construct($action, $submit, $submit_class, $form_class);
            if ( isset( $_SESSION['params'] ) ){
                $params = $_SESSION['params'];
                unset($_SESSION['params']);
            }
            $allowedInputs = [ "fname", "lname", "email", "password", "re_password", "captcha"];
            foreach ( $allowedInputs as $function ){
                if ( isset( $params[$function] ) ){
                    $value = $params[$function];
                    $this -> $function( $value );
                }
                else
                    $this -> $function();
            }
        }
        public function fname( $value = null ){
            if ( isset($value) && !Validation::Short_Text($value) ){
                $error = "نام وارد شده بیش از حد کوتاه است!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::text_floating("fname","نام","required",$value,null,null,$error);
        }
        public function lname( $value = null ){
            if ( isset($value) && !Validation::Short_Text($value) ){
                $error = "نام وارد شده بیش از حد کوتاه است!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::text_floating("lname","نام خانوادگی","required",$value,null,null,$error);
        }
        public function email( $value = null ){
            if ( isset($value) && !Validation::email($value) ){
                $error = "ایمیل وارد شده درست نمیباشد!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::email_floating("email","ایمیل","required",$value,null,null,$error);
        }
        public function password( $value = null ){
            if ( isset($value) && !Validation::password($value) ){
                $error = "گذرواژه وارد شده مناسب نمیباشد!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::password_floating("password","گذرواژه","required",null,null,"حداقل 8 کاراکتر و ترکیبی از حروف کوچک و بزرگ و اعداد",$error);
        }
        public function re_password( $value = null ){
            if ( isset($value) && !Validation::password($value) ){
                $error = "گذرواژه وارد شده مناسب نمیباشد!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::password_floating("re-password","تکرار گذرواژه","required",null,null,null,$error);
        }
        public function captcha( $value = null ){
            if ( isset($value) && !Validation::Captcha_Check($value) ){
                $error = "مقدار تصویر وارد شده صحیح نمیباشد!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::Captcha_Generator( $error );
        }
    }
}