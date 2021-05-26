<?php
if (!class_exists("Authentication")) {
    class Authentication{
        static public function login( $uid ){
            $_SESSION['uid'] = $uid;
            $_SESSION['last_login'] = time();
        }
        static public function check(){
            return isset( $_SESSION['uid'] );
        }
        static public function logout(){
            unset( $_SESSION['uid'] );
        }
        static public function uid(){
            if (self::check()){
                return $_SESSION['uid'];
            }
            else{
                return false;
            }
        }
        static public function auto_logout(){
            if ( self::check() ){
                if ( time() - $_SESSION['last_login'] > LoginDeadline * 24 * 60 * 60 ) { // 30 day
                    Alert::alerts("تاریخ انقضا ورود شما به اتمام رسیده است",null,"warning");
                    self::logout();
                }
                if ( time() - $_SESSION['last_activity'] > ActivityDeadline * 60 ) { // 10 min
                    Alert::alerts("مدتی در سایت فعالیتی نداشتید",null,"warning");
                    self::logout();
                }
                $_SESSION['last_activity'] = time();
            }
        }
    }
}