<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Форма обратной связи</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" property="stylesheet" type="text/css" href="http://modern-teh.by/css/style.min.css">
  <style>
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 1000px white inset !important;
    }
  </style>
</head>
<body>
  <h1 class="text-center">Пример формы расчета</h1>
  <hr>
  <div class="item">
  <div class="text-center">
    <!-- Кнопка, для открытия модального окна -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackForm">
      Онлайн-расчет кухни
    </button>
  </div></div>

  <!-- Форма обратной связи в модальном окне -->
  <div class="modal fade" id="feedbackForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog mod-diag" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Онлайн-расчет кухни от <a href="http://modern-teh.by/"><span class="colorVi viva-kursiv">ViVa</span><span class="colorKi viva-kursiv">kitchen</span></a></h4>
        </div>
        
        <div class="modal-body">
            <!-- Сообщение, отображаемое в случае успешной отправки данных -->
            <div class="alert alert-success hidden" role="alert" id="msgSubmit" style="margin-bottom: 0px;">
              <strong>Внимание!</strong> Ваш запрос отправлен.
            </div>

            <!-- Форма обратной связи -->
            <form id="messageForm" enctype="multipart/form-data">
              <div class="row">
                <div id="error" class="col-sm-12" style="color: #ff0000; margin-top: 5px; margin-bottom: 5px;"></div>
                <!-- Имя и email пользователя -->
                <div class="col-sm-6">
                  <!-- Имя пользователя -->
                  <div class="form-group has-feedback">
                    <label for="name" class="control-label">Введите ваше имя:</label>
                    <input type="text" id="name" name="name" class="form-control" required="required" value="" placeholder="Например, Иван Петров" minlength="2" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- Email пользователя -->
                  <div class="form-group has-feedback">
                    <label for="email" class="control-label">Введите адрес email:</label>
                    <input type="email" id="email" name="email" class="form-control" required="required"  value="" placeholder="Например, rb@viva-kitchen.com" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label for="phone" class="control-label">Введите ваш номер телефона:</label>
                    <input type="text" id="phone" name="phone" class="form-control" required="required" value="" placeholder="Например, 29 6072734" minlength="2" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label for="gorod" class="control-label">Введите ваш город:</label>
                    <input type="text" id="gorod" name="gorod" class="form-control" required="required"  value="" placeholder="Например, Минск" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label for="kuhnya" class="control-label">Модель кухни:</label>
                    <select class="form-control" id="kuhnya" name="kuhnya" required>
                      <option value="" disabled selected="selected">Модель кухни</option>
                      <option>BENITA</option>
                      <option>BENITA LUX</option>
                      <option>BIANCA MARIA</option>
                      <option>DELLA LUCE</option>
                      <option>DIAMANTE</option>
                      <option>FORTEZZA</option>
                      <option>GIOVANNI MARIA</option>
                      <option>GRANDE</option>
                      <option>LINEA PERFETTA</option>
                      <option>LINEA PERFETTA LUX</option>
                      <option>LUCIDO</option>
                      <option>LUCIDO LUX</option>
                      <option>LUCIDO PRO</option>
                      <option>MELBOURNE</option>
                      <option>MIRELLA</option>
                      <option>MIX</option>
                      <option>NORMA</option>
                      <option>NORMA LUX</option>
                      <option>PRIMAVERA</option>
                      <option>URBANO</option>
                      <option>VIVA</option>
                    </select>
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Планировка кухни:</label>
                    <br>
                    <input type="radio" name="plan" value="Прямая" required /> Прямая<br />
                    <input type="radio" name="plan" value="П-образная" /> П-образная<br />
                    <input type="radio" name="plan" value="Г-образная" /> Г-образная‎<br />
                    <input type="radio" name="plan" value="с островом" /> с островом<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Материал верхних секций:</label>
                    <br>
                    <input type="radio" name="matverh" value="Эмаль" required /> Эмаль<br />
                    <input type="radio" name="matverh" value="Массив" /> Массив<br />
                    <input type="radio" name="matverh" value="Шпон‎" /> Шпон‎<br />
                    <input type="radio" name="matverh" value="Пластик" /> Пластик<br />
                    <input type="radio" name="matverh" value="Акрил" /> Акрил<br />
                    <input type="radio" name="matverh" value="ДСП" /> ДСП<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Материал нижних секций:</label>
                    <br>
                    <input type="radio" name="matniz" value="Эмаль" required /> Эмаль<br />
                    <input type="radio" name="matniz" value="Массив" /> Массив<br />
                    <input type="radio" name="matniz" value="Шпон‎" /> Шпон‎<br />
                    <input type="radio" name="matniz" value="Пластик" /> Пластик<br />
                    <input type="radio" name="matniz" value="Акрил" /> Акрил<br />
                    <input type="radio" name="matniz" value="ДСП" /> ДСП<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Столешница:</label>
                    <br>
                    <input type="radio" name="stolesh" value="Пластик" required /> Пластик<br />
                    <input type="radio" name="stolesh" value="Искусственный камень" /> Искусственный камень<br />
                    <input type="radio" name="stolesh" value="Кварц" /> Кварц<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Посудомоечная машина:</label>
                    <br>
                    <input type="radio" name="posud" value="45 см" required /> 45 см<br />
                    <input type="radio" name="posud" value="60 см" /> 60 см<br />
                    <input type="radio" name="posud" value="Нет" /> Нет<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Техника (планируемая):</label>
                    <br>
                    <input type="checkbox" name="tehnika1" value="Варочная панель" /> Варочная панель<br />
                    <input type="checkbox" name="tehnika2" value="Духовой шкаф" /> Духовой шкаф<br />
                    <input type="checkbox" name="tehnika3" value="Кофемашина" /> Кофемашина<br />
                    <input type="checkbox" name="tehnika4" value="Стиральная машина" /> Стиральная машина<br />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label"> </label>
                    <br>
                    <input type="checkbox" name="tehnika5" value="Вытяжка‎" /> Вытяжка‎<br />
                    <input type="checkbox" name="tehnika6" value="СВЧ‎" /> СВЧ‎<br />
                    <input type="checkbox" name="tehnika7" value="Посудомоечная машина" /> Посудомоечная машина<br />
                    ‎<br />‎<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Холодильник:</label>
                    <br>
                    <input type="radio" name="holod" value="Встраиваемый" required /> Встраиваемый<br />
                    <input type="radio" name="holod" value="Отдельностоящий" /> Отдельностоящий<br />
                    <input type="radio" name="holod" value="Side-by-Side" /> Side-by-Side<br />
                    <input type="radio" name="holod" value="Нет" /> Нет<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Вытяжка:</label>
                    <br>
                    <input type="radio" name="vityajka" value="Встраиваемая в шкаф" required /> Встраиваемая в шкаф<br />
                    <input type="radio" name="vityajka" value="Настенная" /> Настенная<br />
                    <input type="radio" name="vityajka" value="Островная" /> Островная<br />
                    <input type="radio" name="vityajka" value="Нет" /> Нет<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Стиральная машина:</label>
                    <br>
                    <input type="radio" name="stiral" value="Встраиваемая" required /> Встраиваемая<br />
                    <input type="radio" name="stiral" value="Отдельностоящая" /> Отдельностоящая<br />
                    <input type="radio" name="stiral" value="Нет" /> Нет<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">СВЧ:</label>
                    <br>
                    <input type="radio" name="svh" value="Встраиваемая" required /> Встраиваемая<br />
                    <input type="radio" name="svh" value="Отдельностоящая" /> Отдельностоящая<br />
                    <input type="radio" name="svh" value="Нет" /> Нет<br />
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
              </div>
              <!-- Сообщение пользователя -->
              <div class="form-group has-feedback">
                <label for="message" class="control-label">Введите сообщение:</label>
                <textarea id="message" class="form-control" rows="3" placeholder="Введите сообщение, состоящее не более чем из 500" minlength="0" maxlength="500" required="required"></textarea>
              </div>
              <!-- Файлы, для прикрепления к форме -->
              <div class="form-group">
                <p style="font-weight: 700;">Прикрепить к сообщению файлы (максимум <span id="countFiles"></span>):</p>
                <!-- Файл -->
                <input type="file" name="images[]">
                <p style="margin-top: 3px; margin-bottom: 3px; color: #ff0000;"></p>
              </div>
              <hr style="margin-top: 3px; margin-bottom: 3px;">
              <!-- Капча к форме -->
              <!-- Изображение, содержащее код CAPTCHA-->		  
	            <img id="img-captcha" src="captcha.php">
              <!--Элемент, запрашивающий новый код CAPTCHA-->
	            <div id="reload-captcha" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Обновить</div>
	            <!--Блок для ввода кода CAPTCHA-->
	            <div class="form-group has-feedback">
                <label id="label-captcha" for="captcha" class="control-label">Пожалуйста, введите указанный на изображении код:</label>
	              <input style="width: auto;" id="text-captcha" name="captcha" type="text" class="form-control" required="required" value="" minlength="6" maxlength="6" autocomplete="off">
	              <span class="glyphicon form-control-feedback"></span>
              </div>
              <!-- Кнопка, отправляющая форму по технологии AJAX -->  
              <button name="send-message" type="submit" class="btn btn-primary pull-right">Отправить запрос</button>
            </form><!-- Конец формы -->
            <div class="clearfix"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="../../modalform/script.js"></script>

</body>
</html>