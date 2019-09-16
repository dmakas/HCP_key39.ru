<?php $adm_email = trim(stripslashes(strip_tags(htmlspecialchars($_POST['adm_email']))));
  $adm_login = trim(stripslashes(strip_tags(htmlspecialchars($_POST['adm_login']))));
  $adm_pswd = trim(stripslashes(strip_tags(htmlspecialchars($_POST['adm_pswd']))));
  if(isset($_POST['adm_add'])){
    if(empty($adm_email) || empty($adm_login) || empty($adm_pswd)){
      $adm_add_empty_error = "Поля формы не должны быть пустыми!";
    }elseif(!preg_match("/^[_a-zA-Z0-9]+$/", $adm_login) || !preg_match("/^[a-zA-Z0-9]+$/", $adm_pswd)){
      $adm_add_preg_error = "Поля должны состоять из латинских букв и цифр!";
    }elseif(strlen($adm_email) < 5 || strlen($adm_email) > 50 || strlen($adm_login) < 5 || strlen($adm_login) > 50 || strlen($adm_pswd) < 5 || strlen($adm_pswd) > 50){
      $adm_add_strlen_error = "Кол-во символов в форме не должно быть меньше 5 и больше 50 символов!";
    }else{
      $adm_add_chk_user = mysqli_query($msql_connect, "SELECT login FROM users WHERE login = '$adm_login'");
      $adm_add_chk_user_fetch = mysqli_fetch_array($adm_add_chk_user);
      $adm_add_chk_user_same = $adm_add_chk_user_fetch['login'];
      if($adm_login == $adm_add_chk_user_same){
        $adm_add_user_exist = "Такой пользователь уже существует в системе!";
      }else{
        $adm_md5_pswd = md5($adm_pswd);
        $adm_add_new_adm_query = mysqli_query($msql_connect, "INSERT INTO users(login, password, email) VALUES('$adm_login', '$adm_md5_pswd', '$adm_email')");
        if($adm_add_new_adm_query){
          $adm_add_success = "Новый администратор добавлен!";
        }else{
          $adm_add_error = "Новый администратор не был добавлен! Попробуйте еще раз!";
        }
      }
    }
  } ?>
