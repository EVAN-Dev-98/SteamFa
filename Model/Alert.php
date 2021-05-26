<?php
if (!class_exists("Alert")) {
    class Alert {

        static private function alert_template($text, $des, $type = 'danger'){
            switch ($type){
                case 'info':
                case 'warning':
                case 'success': break;
                case 'error':	$type = 'danger';
            }
            return "<section class='alert alert-{$type} text-start alert-dismissible fade show' role='alert'>
                        <strong class='me-3'>{$text}</strong>{$des}
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </section>";
        }

        static public function alerts($text = "" , $des = "" , $type = "danger"){
            if ( $text !== "" ){
                $_SESSION["alert"][] = self::alert_template($text,$des,$type);
            }
            elseif ( isset($_SESSION["alert"]) ){
                $result = join("\n", $_SESSION['alert']);
                unset($_SESSION["alert"]);
                return $result;
            }
            else{
                return false;
            }
        }
    }
}