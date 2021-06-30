<?php
/* Created By Evan ( Sajad Gholami ) */
if (!class_exists("Form")) {
    class Form {
        public function __construct( $action , $submit = 'ثبت نام' , $submit_class = '' ,  $form_class = ''){
            $this -> action = $action;
            $this -> submit = $submit;
            $this -> submit_class = $submit_class;
            $this -> form_class = $form_class;
        }
        // -----------------------------------------------------------------------------------------
        var array $InputArray = [];
        var string $action = '';
        var string $submit = '';
        var string $submit_class = '';
        var string $form_class = '';
        // -----------------------------------------------------------------------------------------
        private function template( $input , $style , $helper = null , $error = null ){
            $result = <<<EOT

    <section class="{$style} mb-3">
        {$input}
EOT;
            if ( isset($helper) ) {
                $result .= <<<EOT
<section class = "text-muted w-100">{$helper}</section>
EOT; }
            if ( isset($error) ) {
                $result .= <<<EOT
<section class = "text-danger">{$error}</section>
EOT; }
            $result .= <<<EOT
</section>
EOT;
            $this -> InputArray[] = $result;
        }
        // -----------------------------------------------------------------------------------------
        private function input_text( $type , $name , $label , $options , $style , $id , $value , $helper , $placeholder ){
            $options_array = explode("|",$options);
            $options = implode(" ",$options_array);
            $lbl = <<<EOT
<label class="form-label" for="{$id}">{$label}</label>
EOT;
            $input = <<<EOT
<input type="{$type}" class="form-control py-2" name="{$name}" id="{$id}" placeholder="{$placeholder}" value="{$value}" {$options}>
EOT;
            $result = '';
            if ( !isset($style) )
                $result = $lbl . $input;
            if ( $style === "form-floating" )
                $result = $input . $lbl;
            if ( $style === "input-group" ){
                $span = <<<EOT
<span class="input-group-text" id="{$id}">{$label}</span>
EOT;
                $result = $span . $input;
            }
            $this -> template( $result , $style , $helper );
        }
        // -----------------------------------------------------------------------------------------
        private function input_text_area( $name , $label , $options , $style , $rows , $cols , $id , $value , $helper , $placeholder ){
            $lbl = <<<EOT
<label class="form-label" for="{$id}">{$label}</label>
EOT;
            $input = <<<EOT
<textarea class="form-control py-2" name="{$name}" id="{$id}" rows="{$rows}" cols="{$cols}" placeholder="{$placeholder}" {$options}>{$value}</textarea>
EOT;
            $result = '';
            if ( !isset($style) )
                $result = $lbl . $input;
            if ( $style === "form-floating" )
                $result = $input . $lbl;
            if ( $style === "input-group" ){
                $span = <<<EOT
<span class="input-group-text" id="{$id}">{$label}</span>
EOT;
                $result = $span . $input;
            }
            $this -> template( $result , $style , $helper);
        }
        // -----------------------------------------------------------------------------------------
        public function form_title( $label ){
            $result = <<<EOT
<p class="form-title">{$label}</p>
EOT;
            $this -> InputArray[] = $result;
        }
        // -----------------------------------------------------------------------------------------
        public function text( $name , $label , $options = null , $id = null , $value = null , $helper = null , $placeholder = null ){
            if ( !isset($id) )
                $id = $name;
            $this -> input_text("text" , $name , $label , $options , null , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        public function text_floating( $name , $label , $options = null , $id = null , $value = null , $helper = null ){
            if ( !isset($id) )
                $id = $name;
            $placeholder = $name;
            $this -> input_text("text" , $name , $label , $options , "form-floating" , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        public function text_group( $name , $label , $options = null , $id = null , $value = null , $helper = null , $placeholder = null ){
            if ( !isset($id) )
                $id = $name;
            $this -> input_text("text" , $name , $label , $options , "input-group" , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        public function email( $name , $label , $options = null , $id = null , $value = null , $helper = null , $placeholder = null ){
            if ( !isset($id) )
                $id = $name;
            $options .= " pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' title='ایمیل وارد شده درست نمیباشد'";
            $this -> input_text("email" , $name , $label , $options , null , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        public function email_floating( $name , $label , $options = null , $id = null , $value = null , $helper = null ){
            if ( !isset($id) )
                $id = $name;
            $options .= " pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' title='ایمیل وارد شده درست نمیباشد'";
            $placeholder = $name;
            $this -> input_text("email" , $name , $label , $options , "form-floating" , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        public function email_group( $name , $label , $options = null , $id = null , $value = null , $helper = null , $placeholder = null ){
            if ( !isset($id) )
                $id = $name;
            $options .= " pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' title='ایمیل وارد شده درست نمیباشد'";
            $this -> input_text("email" , $name , $label , $options , "input-group" , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        public function text_area( $name , $label , $options , $rows , $cols = "24" , $id = null , $value = null , $helper = null , $placeholder = null ){
            if ( !isset($id) )
                $id = $name;
            $this -> input_text_area( $name , $label , $options , null , $rows , $cols , $id , $value , $helper , $placeholder );
        }
        // -----------------------------------------------------------------------------------------
        public function password( $name , $label , $options = null , $id = null , $value = null , $helper = null , $placeholder = null ){
            if ( !isset($id) )
                $id = $name;
            $options .= " pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'";
            $this -> input_text("password" , $name , $label , $options , null , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        public function password_floating( $name , $label , $options = null , $id = null , $value = null , $helper = null ){
            if ( !isset($id) )
                $id = $name;
            $options .= " pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'";
            $placeholder = $name;
            $this -> input_text("password" , $name , $label , $options , "form-floating" , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        public function password_group( $name , $label , $options = null , $id = null , $value = null , $helper = null , $placeholder = null ){
            if ( !isset($id) )
                $id = $name;
            $options .= " pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'";
            $this -> input_text("password" , $name , $label , $options , "input-group" , $id , $value , $helper , $placeholder);
        }
        // -----------------------------------------------------------------------------------------
        static public function CSRF_Token(): string{
            $token = Validation::Token_Generator();
            $_SESSION['CSRF_Token'] = $token;
            return <<<EOT
<input type='hidden' name="csrf_token" value="{$token}">
EOT;
        }
        // -----------------------------------------------------------------------------------------
        public function __toString(){
            $action = $this->action;
            $submit = $this->submit;
            $submit_class = $this->submit_class;
            $form_class = $this->form_class;
            $result = <<< EOT

<form action = "{$action}" method = "post" enctype = "multipart/form-data" class="container {$form_class}">
EOT;
            $result .= self::CSRF_Token();
            foreach($this -> InputArray as $inputString)
                $result .= $inputString;
            $result .= <<< EOT
    <input type = "submit" name = "submit" value = "{$submit}" class= "btn btn-primary {$submit_class}">
</form>
EOT;
            return $result;
        }
    }
}