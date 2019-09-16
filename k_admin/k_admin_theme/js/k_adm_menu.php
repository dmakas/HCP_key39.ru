<?php switch($_GET['k_adm_menu']) {
  case 'add_new_admin':
  include("k_admin_theme/pages/add_new_admin.php");
  break;
  case 'stats':
  include("k_admin_theme/pages/stats.php");
  break;
  case 'callbacks_page':
  include("k_admin_theme/pages/callbacks_page.php");
  break; } ?>
