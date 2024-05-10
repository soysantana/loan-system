<div class="pagetitle">
  <h1>
    <?php if (!empty($nav_title)) echo remove_junk($nav_title); else echo " ";?>
  </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo url('/src/pages/index.php'); ?>"><i class="bi bi-house-door"></i></a>
      </li>
      <li class="breadcrumb-item active">
        <?php if (!empty($nav_title)) echo remove_junk($nav_title); else echo " ";?>
      </li>
    </ol>
  </nav>
</div>