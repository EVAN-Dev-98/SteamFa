<?php
/* Created By Evan ( Sajad Gholami ) */
if (!class_exists("Validation")) {
    class Validation{
        static public function Token_Generator( $length = 20 ): string{
            return bin2hex(random_bytes( $length ));
        }
        static public function Token_Check( $token ):bool{
            return $_SESSION['CSRF_Token'] === $token;
        }
        static public function Number( $string ): bool{
            return filter_var($string,FILTER_VALIDATE_INT ) !== false;
        }
        static public function Natural_Number( $string ): bool{
            return filter_var($string,FILTER_VALIDATE_INT , array("option" => array("min_range" => 0) ) ) !== false;
        }
        static public function Short_Text( $string ): bool{
            return strlen($string) > 2;
        }
        static public function email( $string ): bool{
            return filter_var($string, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/")));
        }
        static public function password( $string ): bool{
            return filter_var($string, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/")));
        }
    }
}