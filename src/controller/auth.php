<?php 
require_once('../config/load.php'); 

$Pass = url('/src/pages/index.php');
$Fail = url('/index.php');

$req_fields = array('username', 'password');
validate_fields($req_fields);

$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

if(empty($errors)){
  $user_id = authenticate($username, $password);
  if($user_id){
     $session->login($user_id);
     updateLastLogIn($user_id);
     $session->msg("s", "Welcome");
     redirect($Pass, false);

  } else {
    $session->msg("d", "Nombre de usuario y/o contraseña incorrecto.");
    redirect($Fail, false);
  }

} else {
   $session->msg("w", implode(", ", $errors));
   redirect($Fail, false);
}
?>
