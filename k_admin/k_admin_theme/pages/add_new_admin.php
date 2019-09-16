<?php include("k_admin_theme/js/add_new_admin.php"); ?>
<?php $chk_all_history_query = mysqli_query($msql_connect,"SELECT * FROM history ORDER BY id DESC LIMIT 5"); ?>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <h3>Добавить пользователя</h3>
  <hr>
  <br>
  <p>
    <?php include("k_admin_theme/js/add_new_adm_errors.php"); ?>
  </p>
  <br>
  <form method="POST">
    <input type="text" name="adm_login" placeholder="Логин">
    <br>
    <small>Допустимы только английские буквы и цифры</small>
    <br>
    <br>
    <input type="email" name="adm_email" placeholder="E-mail">
    <br>
    <br>
    <input type="password" name="adm_pswd" placeholde="Пароль">
    <br>
    <small>Допустимы только английские буквы и цифры</small>
    <br>
    <br>
    <button type="submit" class="k-admin-main-button" name="adm_add">Добавить администратора</button>
  </form>
  <hr>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
  <?php $chk_all_adm_users_query = mysqli_query($msql_connect, "SELECT * FROM users"); ?>
  <h3>Все пользователи</h3>
  <hr>
  <table width="100%" border="0">
    <tr>
      <td width="45%">
        Логин
      </td>
      <td width="50%">
        E-mail
      </td>
      <td width="5%">
        Удалить
      </td>
    </tr>
  </table>
  <hr>
  <?php while($chk_all_adm_users_fetch = mysqli_fetch_array($chk_all_adm_users_query)){ ?>
    <table width="100%">
      <tr>
        <td width="45%">
          <?php echo $chk_all_adm_users_fetch['login']; ?>
        </td>
        <td width="50%">
          <?php echo $chk_all_adm_users_fetch['email']; ?>
        </td>
        <td width="5%">
          <a href="?k_adm_menu=add_new_admin&user_del=<?php echo $chk_all_adm_users_fetch['id']; ?>"><i class="fas fa-times k-admin-delete-icon"></i></a>
        </td>
      </tr>
    </table>
    <hr>
  <?php } ?>
  <?php include("k_admin_theme/js/adm_delete.php"); ?>
</div>
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
  <h3>История посещений <br><small>Показаны последние 5 входов в админ-панель</small></h3>
  <hr>
  <table width="100%" border="0">
    <tr>
      <td width="45%">
        Логин
      </td>
      <td width="55%">
        Дата входа
      </td>
    </tr>
  </table>
  <hr>
  <?php while($chk_all_history_fetch = mysqli_fetch_array($chk_all_history_query)){ ?>
    <table width="100%">
      <tr>
        <td width="45%">
          <?php echo $chk_all_history_fetch['login']; ?>
        </td>
        <td width="55%">
          <?php echo $chk_all_history_fetch['date']; ?>
        </td>
      </tr>
    </table>
    <hr>
  <?php } ?>
  <h3>Название сайта</h3>
  <hr>
  <br>
  <p>Нынешнее название сайта: <u><?php echo $this_site_name_fetch['name']; ?></u></p>
  <small>
    <?php if(isset($site_name_add_success)){
      echo $site_name_add_success;
    } ?>
  </small>
  <form method="POST">
    <input type="text" name="site_name" placeholder="Введите название сайта">
    <br>
    <br>
    <button type="submit" class="k-admin-main-button" name="add_site_name">Изменить название</button>
  </form>
  <hr>
</div>
