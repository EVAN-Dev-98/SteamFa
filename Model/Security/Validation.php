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
    }
}