<?php
/* Created By Evan ( Sajad Gholami ) */
if (!class_exists("Contact")) {
    class Contact extends Form {
        public function __construct($action, $submit = 'ثبت نام', $params = array() , $submit_class = '', $form_class = ''){
            parent::__construct($action, $submit, $submit_class, $form_class);
            if ( isset( $_SESSION['params'] ) ){
                $params = $_SESSION['params'];
                unset($_SESSION['params']);
            }
            parent::form_title("فرم تماس با ما");
            $allowedInputs = [ "name", "email", "subject", "message"];
            foreach ( $allowedInputs as $function ){
                if ( isset( $params[$function] ) ){
                    $value = $params[$function];
                    $this -> $function( $value );
                }
                else
                    $this -> $function();
            }
        }
        public function name( $value = null ){
            if ( isset($value) && !Validation::Short_Text($value) ){
                $error = "متن وارد شده خیلی کوتاه است!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::text_normal("name","نام شما","required pattern='.{2,}'",$value, $value,"ترجیحاً فارسی!",$error);
        }
        public function email( $value = null ){
            if ( isset($value) && !Validation::email($value) ){
                $error = "ایمیل وارد شده درست نمیباشد!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::email_normal("email","ایمیل","required",$value,null,null,$error);
        }
        public function subject( $value = null ){
            if ( isset($value) && !Validation::Short_Text($value) ){
                $error = "متن وارد شده خیلی کوتاه است!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::text_normal("subject","موضوع پیام","required pattern='.{2,}'",$value,null,null,$error);
        }
        public function message( $value = null ){
            if ( isset($value) && !Validation::Short_Text($value) ){
                $error = "متن وارد شده خیلی کوتاه است!";
                $this-> valid = false;
            }
            else
                $error = '';
            parent::text_area("message","پیام شما","required pattern='.{2,}'","3",null,$value,null,null,$error);
        }
    }
}