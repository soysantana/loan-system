<?php
  require_once('../config/load.php');

  $login = url('/index.php');

  if(!$session->logout()) {
    redirect($login);
  }
?>
