<!-- Info data -->
<br id="call">
<br>
<div class="k-top-container">
  <div class="container-fluid k-width-max-container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="k-top-container-h1" style="text-align: center !important;">Мы всегда готовы помочь Вам.<h1>
        <h2 class="k-top-container-h2" style="text-align: center !important;">Если Вам нужно заказать ЭЦП или у Вас есть вопросы по ее использованию</h2>
        <p style="text-align: center !important;">Специалисты нашей компании свяжутся с Вами в течение рабочего дня, с понедельника по пятницу, <br class="hidden-sm hidden-md hidden-lg"><b>с 9-00 до 18-00</b>.</p>
        <br>
        <p align="center">
          <?php if(isset($form_strlen_error2)){
            echo $form_strlen_error2;
          }
          if(isset($form_add_success2)){
            echo $form_add_success2;
          }
          if(isset($form_add_error2)){
            echo $form_add_error2;
          } ?>
        </p>
        <form method="POST" style="width: 270px; margin: 0 auto;">
          <input type="hidden" onkeyup="checkParams2()" name="k_form_site_email2" id="k_form_site_email2" placeholder="Ваш E-mail" class="k-form-input" value="no@email.fromuser">
          <input type="text" onkeyup="checkParams2()" name="k_form_site_name2" id="k_form_site_name2" placeholder="Иван Красинский" class="k-form-input">
          <input type="number" onkeyup="checkParams2()" name="k_form_site_number2" id="k_form_site_number2" placeholder="79210000000" class="k-form-input">
          <input type="hidden" name="k_form_site_date2" value="<?php echo date("Y-m-d H:i:s"); ?>">
          <input type="hidden" name="k_form_site_month2" value="<?php echo date("m"); ?>">
          <input type="hidden" name="k_form_site_day2" value="<?php echo date("d"); ?>">
          <input type="hidden" name="k_form_site_year2" value="<?php echo date("Y"); ?>">
          <small class="k-form-small">
            <table align="center" width="100%" border="0">
              <tr>
                <td width="20%">
                  <i class="fas fa-envelope-open fa-2x k-form-envelope"></i>
                </td>
                <td width="80%" align="left">
                  Заполните все поля, чтобы отправить нам заявку!
                  <br>
                  Мы свяжемся с Вами незамедлительно.
                </td>
              </tr>
            </table>
            <br>
            <br>
            <table align="center" width="100%" border="0">
              <tr>
                <td width="20%">
                  <i class="fas fa-lock fa-2x k-form-lock"></i>
                </td>
                <td width="80%" align="left">
                  Все данные надежно сохранены и неподлежат передачи третьим лицам.
                </td>
              </tr>
            </table>
          </small>
          <button type="submit" name="k_form_site_button2" id="k_form_site_button2" class="k-form-button" disabled>Оставить заявку</button>
          <small class="k-form-small">
            <table align="center" width="100%" border="0">
              <tr>
                <td width="20%">
                  <i class="fas fa-bell fa-2x k-form-envelope k-form-bell"></i>
                </td>
                <td width="80%" align="left">
                  Кнопка станет активной после заполнения всех полей формы.
                </td>
              </tr>
            </table>
          </small>
        </form>
      </div>
    </div>
  </div>
  <br>
</div>
<br>
<br>

<!-- Info data -->
