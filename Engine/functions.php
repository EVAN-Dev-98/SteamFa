<?php
function alert($text , $des , $type){
    $alert = "<section class=\"alert alert-{$type} alert-dismissible fade show\" role=\"alert\">
  <strong>{$text}</strong> {$des}
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</section>";
    return $alert;
}