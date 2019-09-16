<!-- Top container -->

<br>
<br>
<br>


<div class="k-top-container">
  <div class="container-fluid k-width-max-container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <h1 class="k-top-container-h1" style="font-size: 32px !important;">Удостоверяющий центр <a href="https://www.kartoteka.ru" target=_blank>КАРТОТЕКА.РУ</a> на все случаи жизни!<h1>
        <h1 class="k-top-container-h1" style="font-size: 28px !important;">Скидка от представительства УЦ в Калининграде - 5%!<h1>
        <h2 class="k-top-container-h2">Мы предлагаем изготовление и обслуживание ключей электронной подписи:</h2>
        <br>
        <br>
        <table align="center" width="100%" border="0">
          <tr>
            <td width="10%" align="center" class="hidden-xs">
              <i class="fab fa-edge fa-3x k-top-container-icons"></i>
            </td>
            <td width="80%">
              <p class="k-top-container-p">Для сделок на ЭТП:</p>
              <h3 class="k-top-container-h3">от <b class="k-top-container-b">3000</b> рублей.</h3>
            </td>
          </tr>
        </table>
        <br>
        <table align="center" width="100%" border="0">
          <tr>
            <td width="10%" align="center" class="hidden-xs">
              <i class="fas fa-chess-rook fa-3x k-top-container-icons"></i>
            </td>
            <td width="80%">
              <p class="k-top-container-p">Для взаимодействия с государственными органами и системами:</p>
              <h3 class="k-top-container-h3">от <b class="k-top-container-b">2000</b> рублей.</h3>
            </td>
          </tr>
        </table>
        <br>
        <table align="center" width="100%" border="0">
          <tr>
            <td width="10%" align="center" class="hidden-xs">
              <i class="far fa-handshake fa-3x k-top-container-icons"></i>
            </td>
            <td width="80%">
              <p class="k-top-container-p">Для физических лиц: Все госуслуги без очередей и задержек.<br>
                                          Получение сведений, оформление документов, регистрация фирм, недвижимого и движимого имущества. <br><br>
                                          <strong>Возможность с 01 января 2019 года зарегистрировать компанию с помощью КЭП без оплаты госпошлины!<strong></p>
              <h3 class="k-top-container-h3">от <b class="k-top-container-b">1500</b> рублей.</h3>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 k-top-container-border">
        <br class="hidden-md hidden-lg">
        <p align="center">
          <?php if(isset($form_strlen_error)){
            echo $form_strlen_error;
          }
          if(isset($form_add_success)){
            echo $form_add_success;
          }
          if(isset($form_add_error)){
            echo $form_add_error;
          } ?>
        </p>
        <form method="POST">
          <input type="hidden" onkeyup="checkParams()" name="k_form_site_email" id="k_form_site_email" placeholder="Ваш E-mail" class="k-form-input" value="no@email.fromuser">
          <input type="text" onkeyup="checkParams()" name="k_form_site_name" id="k_form_site_name" placeholder="Иван Красинский" class="k-form-input">
          <input type="number" onkeyup="checkParams()" name="k_form_site_number" id="k_form_site_number" placeholder="79210000000" class="k-form-input">
          <input type="hidden" name="k_form_site_date" value="<?php echo date("Y-m-d H:i:s"); ?>">
          <input type="hidden" name="k_form_site_month" value="<?php echo date("m"); ?>">
          <input type="hidden" name="k_form_site_day" value="<?php echo date("d"); ?>">
          <input type="hidden" name="k_form_site_year" value="<?php echo date("Y"); ?>">
          <small class="k-form-small">
            <table align="center" width="100%" border="0">
              <tr>
                <td width="10%">
                  <i class="fas fa-envelope-open fa-2x k-form-envelope"></i>
                </td>
                <td width="80%">
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
                <td width="10%">
                  <i class="fas fa-lock fa-2x k-form-lock"></i>
                </td>
                <td width="80%">
                  Все данные надежно сохранены и неподлежат передачи третьим лицам.
                </td>
              </tr>
            </table>
          </small>
          <button type="submit" name="k_form_site_button" id="k_form_site_button" class="k-form-button" disabled>Оставить заявку</button>
          <small class="k-form-small">
            <table align="center" width="100%" border="0">
              <tr>
                <td width="10%">
                  <i class="fas fa-bell fa-2x k-form-envelope k-form-bell"></i>
                </td>
                <td width="80%">
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
  <br>
  <h2 class="k-top-container-h2" align="center" id="etp">Получите ЭЦП у нас, это <b>быстро, просто и дешево</b>!</h2>
</div>

<!-- Top container -->
