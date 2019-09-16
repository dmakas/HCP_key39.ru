<?php if(!isset($_COOKIE['user_admin'])){
  header("Location: login.php");
} ?>
<?php include("k_admin_theme/js/refrechs.php"); ?>
<?php include("k_admin_theme/js/mysql_connect.php"); ?>
<?php include("k_admin_theme/js/site_name.php"); ?>
<?php $data_callbacks_get_number = $_GET['date_callbacks_get']; ?>
<?php $this_site_name_query = mysqli_query($msql_connect, "SELECT name FROM site_name WHERE id = '1' LIMIT 1");
  $this_site_name_fetch = mysqli_fetch_array($this_site_name_query); ?>

<!DOCTYPE html>
<html lang="ru">
  <head>

    <!-- Meta tags -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta tags -->

    <!-- Titel -->

    <title><?php echo $this_site_name_fetch['name']; ?> - административная панель</title>

    <!-- Titel -->

    <!-- CSS stylesheet -->

    <link href="k_admin_theme/css/bootstrap.css" rel="stylesheet">
    <link href="k_admin_theme/css/fontawesome_all.css" rel="stylesheet">
    <link href="k_admin_theme/css/theme.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="http://key39.ru/k_admin/k_admin_theme/images/favicon.png" />

    <!-- CSS stylesheet -->

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pattaya&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&amp;subset=cyrillic" rel="stylesheet">

    <!-- Fonts -->

  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top k-admin-top-menu" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fas fa-desktop k-admin-top-men-icons"></i> <?php echo $this_site_name_fetch['name']; ?> - административная панель</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?k_adm_menu=callbacks_page"><i class="fas fa-address-card k-admin-top-men-icons"></i> Заявки</a></li>
            <li><a href="?k_adm_menu=stats"><i class="fas fa-chart-pie k-admin-top-men-icons"></i> Статистика</a></li>
            <li><a href="?k_adm_menu=add_new_admin"><i class="fas fa-cog k-admin-top-men-icons"></i> Настройки</a></li>
          </ul>

          <p class="navbar-text navbar-right" style="color: #FFF !important;">Привет, <?php echo $_COOKIE['user_admin']; ?></p>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <br>
    <br>
    <br>
    <br>

    <div class="container-fluid">
      <div class="row">
        <?php include("k_admin_theme/js/k_adm_menu.php"); ?>
      </div>
    </div>

    <!-- Sripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="k_admin_theme/js/bootstrap.js"></script>

    <!-- Sripts -->

  </body>
</html>

<?php include("k_admin_theme/js/mysql_close.php"); ?>
