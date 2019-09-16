<?php $k_form_site_email = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_email']))));
  $k_form_site_name = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_name']))));
  $k_form_site_number = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_number']))));
  $k_form_site_date = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_date']))));
  $k_form_site_month = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_month']))));
  $k_form_site_day = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_day']))));
  $k_form_site_year = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_year']))));
  if(isset($_POST['k_form_site_button'])){
    if(strlen($k_form_site_email) < 2 || strlen($k_form_site_email) > 200 || strlen($k_form_site_name) < 2 || strlen($k_form_site_name) > 200 || strlen($k_form_site_number) < 2 || strlen($k_form_site_number) > 200){
      $form_strlen_error = "Неверное кол-во символов в форме! Допустимо: не менее 5 и не более 200 символов в каждом поле.";
    }else{
      $form_date_add = mysqli_query($msql_connect, "INSERT INTO callbacks (email, name, phone, date, month, day, year) VALUES ('$k_form_site_email', '$k_form_site_name', '$k_form_site_number', '$k_form_site_date', '$k_form_site_month', '$k_form_site_day', '$k_form_site_year')");
      $to = 'jurist@gkprostor.ru';
      $subject = 'Новая заявка на сайте key39.ru!';
      $message = '
        <html>
        <head>
          <title>Новая заявка на сайте key39.ru</title>
        </head>
        <body>
          <p>Вам поступила новая заявка от клиента. Пожалуйста, <a href=http://key39.ru/k_admin/login.php>пройдите по ссылке в панель
          управления сайтом</a>, чтобы ознакомиться с контактными данными клиента.</p>

          <table align=left width=100% border=0 cellpadding=10 cellspacing=5>
            <tr>
              <td>
                <b>Имя:</b> '. $k_form_site_name .'
              </td>
            </tr>
            <tr>
              <td>
                <b>Телефон:</b> '. $k_form_site_number .'
              </td>
            </tr>
            <tr>
              <td>
                <b>E-mail:</b> '. $k_form_site_email .'
              </td>
            </tr>
          </table>
          <br>
          <br>
        </body>
        </html>
      ';
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: <info@key39.ru>' . "\r\n";
      $headers .= 'Cc: info@key39.ru' . "\r\n";
      mail($to, $subject, $message, $headers);

      if($form_date_add){
        $form_add_success = "Ваши данные отправлены, мы свяжемся с вами в ближайшее время!";
      }else{
        $form_add_error = "Возникла ошибка, попробуйте снова!";
      }
    }
  }
  $k_form_site_email2 = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_email2']))));
  $k_form_site_name2 = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_name2']))));
  $k_form_site_number2 = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_number2']))));
  $k_form_site_date2 = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_date2']))));
  $k_form_site_month2 = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_month2']))));
  $k_form_site_day2 = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_day2']))));
  $k_form_site_year2 = trim(stripslashes(strip_tags(htmlspecialchars($_POST['k_form_site_year2']))));
  if(isset($_POST['k_form_site_button2'])){
    if(strlen($k_form_site_email2) < 2 || strlen($k_form_site_email2) > 200 || strlen($k_form_site_name2) < 2 || strlen($k_form_site_name2) > 200 || strlen($k_form_site_number2) < 2 || strlen($k_form_site_number2) > 200){
      $form_strlen_error2 = "Неверное кол-во символов в форме! Допустимо: не менее 5 и не более 200 символов в каждом поле.";
    }else{
      $form_date_add2 = mysqli_query($msql_connect, "INSERT INTO callbacks (email, name, phone, date, month, day, year) VALUES ('$k_form_site_email2', '$k_form_site_name2', '$k_form_site_number2', '$k_form_site_date2', '$k_form_site_month2', '$k_form_site_day2', '$k_form_site_year2')");
      $to = 'jurist@gkprostor.ru';
      $subject = 'Новая заявка на сайте key39.ru!';
      $message = '
        <html>
        <head>
          <title>Новая заявка на сайте key39.ru</title>
        </head>
        <body>
          <p>Вам поступила новая заявка от клиента. Пожалуйста, <a href=http://key39.ru/k_admin/login.php>пройдите по ссылке в панель
          управления сайтом</a>, чтобы ознакомиться с контактными данными клиента.</p>

          <table align=left width=100% border=0 cellpadding=10 cellspacing=5>
            <tr>
              <td>
                <b>Имя:</b> '. $k_form_site_name2 .'
              </td>
            </tr>
            <tr>
              <td>
                <b>Телефон:</b> '. $k_form_site_number2 .'
              </td>
            </tr>
            <tr>
              <td>
                <b>E-mail:</b> '. $k_form_site_email2 .'
              </td>
            </tr>
          </table>
          <br>
          <br>
        </body>
        </html>
      ';
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: <info@key39.ru>' . "\r\n";
      $headers .= 'Cc: info@key39.ru' . "\r\n";
      mail($to, $subject, $message, $headers);

      if($form_date_add2){
        $form_add_success2 = "Ваши данные отправлены, мы свяжемся с вами в ближайшее время!";
      }else{
        $form_add_error2 = "Возникла ошибка, попробуйте снова!";
      }
    }
  } ?>
