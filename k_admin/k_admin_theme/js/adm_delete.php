<?php if(isset($_GET['user_del'])){
  $adm_delete_user = $_GET['user_del'];
  $adm_delete_query = mysqli_query($msql_connect, "DELETE FROM users WHERE id = '$adm_delete_user'");
} ?>
