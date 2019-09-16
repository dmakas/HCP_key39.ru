<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <h3>Последние заявки</h3>
  <hr>
  <table width="100%">
    <tr>
      <td width="15%">
        Дата
      </td>
      <td width="30%">
        E-Mail
      </td>
      <td width="35%">
        ФИО
      </td>
      <td width="20%">
        Телефон
      </td>
    </tr>
  </table>
  <hr>
  <?php $limited_callbacks_query = mysqli_query($msql_connect, "SELECT * FROM callbacks ORDER BY id DESC LIMIT 10 ");
    while($limited_callbacks_array = mysqli_fetch_array($limited_callbacks_query)){ ?>
      <table width="100%">
        <tr>
          <td width="15%">
            <?php echo $limited_callbacks_array['date']; ?>
          </td>
          <td width="30%">
            <?php echo $limited_callbacks_array['email']; ?>
          </td>
          <td width="35%">
            <?php echo $limited_callbacks_array['name']; ?>
          </td>
          <td width="20%">
            <?php echo $limited_callbacks_array['phone']; ?>
          </td>
        </tr>
      </table>
      <hr>
  <?php } ?>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
  <h3>Заявки по датам <small><?php echo $_GET['date_callbacks_get'] ?></small></h3>
  <hr>
  <?php $date_callbacks_query = mysqli_query($msql_connect, "SELECT date FROM callbacks GROUP BY date DESC LIMIT 31");
    while($date_callbacks_array = mysqli_fetch_array($date_callbacks_query)){ ?>
      <div class="k-admin-a-class">
        <a href="?k_adm_menu=callbacks_page&date_callbacks_get=<?php echo $date_callbacks_array['date']; ?>"><?php echo $date_callbacks_array['date']; ?></a>
      </div>
  <?php } ?>
  <br>
  <br>
  <br>
  <br>
  <h3>Результат выборки</h3>
  <hr>
  <?php $data_callbacks_info_query = mysqli_query($msql_connect, "SELECT * FROM callbacks WHERE date = '$data_callbacks_get_number'");
    while($data_callbacks_info_fetch = mysqli_fetch_assoc($data_callbacks_info_query)){ ?>
      <table width="100%">
        <tr>
          <td width="15%">
            <?php echo $data_callbacks_info_fetch['date']; ?>
          </td>
          <td width="30%">
            <?php echo $data_callbacks_info_fetch['email']; ?>
          </td>
          <td width="35%">
            <?php echo $data_callbacks_info_fetch['name']; ?>
          </td>
          <td width="20%">
            <?php echo $data_callbacks_info_fetch['phone']; ?>
          </td>
        </tr>
      </table>
      <hr>
    <?php } ?>
</div>
