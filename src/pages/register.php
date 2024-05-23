<?php
ob_start();

require_once('../config/load.php');

$page_title = 'Sign Up - Loan System';
$groups = find_all('user_groups');

include_once('../components/header.php');

include_once('../views/user/register.php');

include_once('../components/script.php');

ob_end_flush();
?>
