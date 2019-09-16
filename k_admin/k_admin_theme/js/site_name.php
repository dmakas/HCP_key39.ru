<?php $site_name = trim(stripslashes(strip_tags(htmlspecialchars($_POST['site_name']))));
  if(isset($_POST['add_site_name'])){
    $site_add_name_chk_query = mysqli_query($msql_connect, "SELECT * FROM site_name WHERE name = '$site_name' LIMIT 1");
    $site_add_name_chk_fetch = mysqli_fetch_array($site_add_name_chk_query);
    $site_add_name_chk_exist = $site_add_name_chk_fetch['name'];
    if(empty($site_add_name_chk_exist)){
      mysqli_query($msql_connect, "UPDATE site_name SET name = '$site_name' WHERE id = '1'");
      $site_name_add_success = "Название изменено, чтобы увидеть изменения на сайте, обновите страницу!";
    }else{
      mysqli_query($msql_connect, "UPDATE site_name SET name = '$site_name' WHERE id = '1'");
      $site_name_add_success = "Название изменено, чтобы увидеть изменения на сайте, обновите страницу!";
    }
  } ?>
