<?php 
require_once('../config/load.php'); 

if (!$session->isUserLoggedIn(true)) { 
    $url = url('/index.php'); 
    redirect($url, false);
}

$page_title = 'Dashboard - Loan System'; 
$nav_title = 'Home'; 

include_once('../components/header.php'); 
include_once('../components/search.php'); 
include_once('../components/user.php'); 
include_once('../components/sidebar.php'); 

echo display_msg($msg);
?>

<main id="main" class="main">
    <?php include_once('../components/nav.php'); ?>
    <!-- Contenido principal aquí -->
</main>
<!-- End #main -->

<?php include_once('../components/footer.php'); ?>