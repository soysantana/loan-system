<?php
 $errors = array();

 /*--------------------------------------------------------------*/
 /* Function for Remove escapes special
 /* characters in a string for use in an SQL statement
 /*--------------------------------------------------------------*/
function real_escape($str){
  global $con;
  $escape = mysqli_real_escape_string($con,$str);
  return $escape;
}
/*--------------------------------------------------------------*/
/* Function for Remove html characters
/*--------------------------------------------------------------*/
function remove_junk($str){
  $str = nl2br($str);
  $str = htmlspecialchars(strip_tags($str, ENT_QUOTES));
  return $str;
}
/*--------------------------------------------------------------*/
/* Function for Uppercase first character
/*--------------------------------------------------------------*/
function first_character($str){
  $val = str_replace('-'," ",$str);
  $val = ucfirst($val);
  return $val;
}
/*--------------------------------------------------------------*/
/* Function for Checking input fields not empty
/*--------------------------------------------------------------*/
function validate_fields($var){
  global $errors;
  foreach ($var as $field) {
    $val = remove_junk($_POST[$field]);
    if(isset($val) && $val==''){
      $errors = $field ." No puede estar en blanco.";
      return $errors;
    }
  }
}
/*--------------------------------------------------------------*/
/* Function for Display Session Message
   Ex echo displayt_msg($message);
/*--------------------------------------------------------------*/
function display_msg($msg = array()) {
  $output = "";
  if (!empty($msg)) {
      foreach ($msg as $key => $value) {
          $output .= "<div class=\"alert alert-{$key} alert-dismissible fade show\" role=\"alert\">";
          $output .= remove_junk(first_character($value));
          $output .= "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>";
          $output .= "</div>";
      }
  }
  return $output;
}

/*--------------------------------------------------------------*/
/* Function for redirect
/*--------------------------------------------------------------*/
function redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
      header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
/*--------------------------------------------------------------*/
/* Function for Readable date time
/*--------------------------------------------------------------*/
function read_date($str){
     if($str)
      return date('d/m/Y g:i:s a', strtotime($str));
     else
      return null;
  }
/*--------------------------------------------------------------*/
/* Function for  Readable Make date time
/*--------------------------------------------------------------*/
function make_date(){
  return strftime("%Y-%m-%d %H:%M:%S", time());
}
/*--------------------------------------------------------------*/
/* Function for  Readable date time
/*--------------------------------------------------------------*/
function count_id(){
  static $count = 1;
  return $count++;
}
/*--------------------------------------------------------------*/
/* Function for  URL proyect
/*--------------------------------------------------------------*/
function url($rutaRelativa) {
    $urlBase = dirname($_SERVER['SCRIPT_NAME']);
    $urlBase = preg_replace('~(?:/[^/]+){2}/?$~', '', $urlBase);
    $rutaFinal = $urlBase . '/' . ltrim($rutaRelativa, '/');
    $rutaFinal = preg_replace('/\/+/', '/', $rutaFinal);
    return $rutaFinal;
}
?>