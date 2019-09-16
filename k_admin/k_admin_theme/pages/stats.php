<?php include("k_admin_theme/js/month_names.php"); ?>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <h3>Статистика за <?php echo date("Y"); ?> год</h3>
  
  <div class="main-stat-year-div">
    <?php include("k_admin_theme/js/yaer_stat.php"); ?>
  </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <h3>Статистика за  <?php echo $this_month_name; ?></h3>
  <div class="container-fluid">
    <div class="row">
      <?php include("k_admin_theme/js/month_stat.php"); ?>
    </div>
  </div>
</div>
