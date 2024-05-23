<?php
ob_start();

$page_title = 'Sign In - Loan System';

require_once('src/config/load.php');

if ($session->isUserLoggedIn(true)) {
    redirect('src/pages/index.php', false);
}

echo display_msg($msg);

include_once('src/components/header.php');

include_once('src/views/user/login.php');

include_once('src/components/script.php');

ob_end_flush();
?>
