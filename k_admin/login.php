<?php if(isset($_COOKIE['user_admin'])){
    header("Location: index.php?k_adm_menu=stats");
  }

  include("k_admin_theme/js/mysql_connect.php");
  $k_admin_login_name = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_admin_login_name']))));
  $k_admin_login_pswd = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_admin_login_pswd']))));
  $k_admin_login_date = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_admin_login_date']))));
  if(isset($_POST['k_admin_login_now'])){
    $k_admin_login_and_pswd_chk_query = mysqli_query($msql_connect, "SELECT * FROM users WHERE login = '$k_admin_login_name' LIMIT 1");
    $k_admin_login_and_pswd_chk_fetch = mysqli_fetch_array($k_admin_login_and_pswd_chk_query);
    $k_admin_login_pswd_md5 = md5($k_admin_login_pswd);
    $k_admin_login_chk = $k_admin_login_and_pswd_chk_fetch['login'];
    $k_admin_pswd_chk = $k_admin_login_and_pswd_chk_fetch['password'];
    if(empty($k_admin_login_name) || empty($k_admin_login_pswd)){
      $k_admin_login_empty_error = "Все поля формы должны быть заполнены!";
    }elseif(!isset($k_admin_login_chk)){
      $k_admin_login_double_error = "Такого пользователя не существует в системе!";
    }elseif(strlen($k_admin_login_name) > 100 || strlen($k_admin_login_name) < 5){
      $k_admin_login_strlen_error = "Неверная длина символов в форме. Допустимое кол-во от 5 до 100!";
    }elseif($k_admin_pswd_chk != $k_admin_login_pswd_md5){
      $k_admin_login_pswd_error = "Неверное имя пользователя или пароль! Попробуйте еще раз.";
    }else{
      mysqli_query($msql_connect, "INSERT INTO history(login, date) VALUES('$k_admin_login_name', '$k_admin_login_date')");
      setcookie("user_admin", $k_admin_login_name, time()+7200);
      header("Location: index.php?k_adm_menu=stats");
    }
  }
  include("k_admin_theme/js/mysql_close.php");

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Вход в панель управления сайтом</title>

    <link href="k_admin_theme/css/login.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="http://key39.ru/k_admin/k_admin_theme/images/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&amp;subset=cyrillic" rel="stylesheet">

  </head>
  <body>

    <div class="k-admin-login-window">
      <div class="k-admin-login-logo">
        <img src="k_admin_theme/images/k_logo_white.png" width="100%">
      </div>
      <small class="error-login">
        <?php

          if(isset($k_admin_login_empty_error)){
            echo $k_admin_login_empty_error;
          }
          if(isset($k_admin_login_strlen_error)){
            echo $k_admin_login_strlen_error;
          }
          if(isset($k_admin_login_double_error)){
            echo $k_admin_login_double_error;
          }
          if(isset($k_admin_login_pswd_error)){
            echo $k_admin_login_pswd_error;
          }

        ?>
      </small>
      <form method="POST" style="padding: 10px;">
        <input type="text" name="k_admin_login_name" class="k-admin-login-window-input" placeholder="Введите логин">
        <input type="password" name="k_admin_login_pswd" class="k-admin-login-window-input" placeholder="Введите пароль">
        <input type="hidden" name="k_admin_login_date" placeholder="<?php echo date("Y-m-d H:i:s"); ?>" value="<?php echo date("Y-m-d H:i:s"); ?>">
        <button type="submit" name="k_admin_login_now" class="k-admin-login-window-button">Войти</button>
      </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  </body>
</html>
