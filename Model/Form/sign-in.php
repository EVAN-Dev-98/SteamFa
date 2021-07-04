<?php
/* Created By Evan ( Sajad Gholami ) */
if (!class_exists("sign_in")) {
    class sign_in extends Form {
        public function __construct($action, $submit = 'ثبت نام', $params = array(), $submit_class = '', $form_class = ''){
            parent::__construct($action, $submit, $submit_class, $form_class);
            if ( isset( $_SESSION['params'] ) ){
                $params = $_SESSION['params'];
                unset($_SESSION['params']);
            }
            $allowedInputs = ["email", "password"];
            foreach ( $allowedInputs as $function ){
                if ( isset( $params[$function] ) ){
                    $value = $params[$function];
                    $this -> $function( $value );
                }
                else
                    $this -> $function();
            }
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
    }
}