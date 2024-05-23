<?php 
require_once('../config/load.php'); 

page_require_level(2);

$page_title = 'Clientes | Nuevo Cliente - Loan System'; 
$nav_title = 'Nuevo Cliente'; 

include_once('../components/header.php'); 
include_once('../components/search.php'); 
include_once('../components/user.php'); 
include_once('../components/sidebar.php'); 
?>

<main id="main" class="main">
    <?php include_once('../components/nav.php'); ?>
</main>

<?php include_once('../components/footer.php'); ?>