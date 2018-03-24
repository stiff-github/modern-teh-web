<?php
  // открываем сессию
  session_start();

  // переменная в которую будем сохранять результат работы
  $data['result']='error';

  // разрешённые типы файлов
  $allowedExtension = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "txt" => "text/plain", "pdf" => "application/pdf", "doc|docx" => "application/msword", "xla|xls|xlsx|xlt|xlw|xlam|xlsb|xlsm|xltm" => "application/vnd.ms-excel");

  // директория для хранения файлов ()
  $pathToFile = $_SERVER['DOCUMENT_ROOT'].'/modalform/files/';

  // максимальный размер файла
  $maxSizeFile = 2097152;

  // функция для проверки длины строки
  function validStringLength($string,$min,$max) {
    $length = mb_strlen($string,'UTF-8');
    if (($length<$min) || ($length>$max)) {
      return false;
    }
    else {
      return true;
    }
  }

  // если данные были отправлены методом POST, то...
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data['result']='success';

    //получить имя, которое ввёл пользователь
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      if (!validStringLength($name,2,30)) {
        $data['name']='Поля имя содержит недопустимое количество символов.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    //получить email, которое ввёл пользователь
    if (isset($_POST['email'])) {
      $email = $_POST['email'];
      if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $data['email']='Поле email введено неправильно';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }

    if (isset($_POST['phone'])) {
      $phone = $_POST['phone'];
      if (!validStringLength($phone,0,30)) {
        $data['phone']='Модель не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['gorod'])) {
      $gorod = $_POST['gorod'];
      if (!validStringLength($gorod,0,30)) {
        $data['gorod']='Модель не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['kuhnya'])) {
      $kuhnya = $_POST['kuhnya'];
      if ($kuhnya=='undefined') {
        $data['kuhnya']='Модель не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['plan'])) {
      $plan = $_POST['plan'];
      if ($plan=='undefined') {
        $data['plan']='Планировка не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['matverh'])) {
      $matverh = $_POST['matverh'];
      if ($matverh=='undefined') {
        $data['matverh']='Материал верхних секций не выбран.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['matniz'])) {
      $matniz = $_POST['matniz'];
      if ($matniz=='undefined') {
        $data['matniz']='Материал нижних секций не выбран.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['stolesh'])) {
      $stolesh = $_POST['stolesh'];
      if ($stolesh=='undefined') {
        $data['stolesh']='Столешница не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['posud'])) {
      $posud = $_POST['posud'];
      if ($posud=='undefined') {
        $data['posud']='Посудомоечная машина не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }

    if (isset($_POST['tehnika1'])) {
      $tehnika1 = $_POST['tehnika1'];
      if ($tehnika1=='Варочная панель') {
        $tehnika1 = 'Да';
      }
      else {
        $tehnika1 = 'Нет';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['tehnika2'])) {
      $tehnika2 = $_POST['tehnika2'];
      if ($tehnika2=='Духовой шкаф') {
        $tehnika2 = 'Да';
      }
      else {
        $tehnika1 = 'Нет';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['tehnika3'])) {
      $tehnika3 = $_POST['tehnika3'];
      if ($tehnika3=='Кофемашина') {
        $tehnika3 = 'Да';
      }
      else {
        $tehnika3 = 'Нет';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['tehnika4'])) {
      $tehnika4 = $_POST['tehnika4'];
      if ($tehnika4=='Стиральная машина') {
        $tehnika4 = 'Да';
      }
      else {
        $tehnika4 = 'Нет';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['tehnika5'])) {
      $tehnika5 = $_POST['tehnika5'];
      if ($tehnika5=='Вытяжка‎') {
        $tehnika5 = 'Да';
      }
      else {
        $tehnika5 = 'Нет';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['tehnika6'])) {
      $tehnika6 = $_POST['tehnika6'];
      if ($tehnika6=='СВЧ‎') {
        $tehnika6 = 'Да';
      }
      else {
        $tehnika6 = 'Нет';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['tehnika7'])) {
      $tehnika7 = $_POST['tehnika7'];
      if ($tehnika7=='Посудомоечная машина') {
        $tehnika7 = 'Да';
      }
      else {
        $tehnika7 = 'Нет';
      }
    } else {
      $data['result']='error';
    }

    if (isset($_POST['holod'])) {
      $holod = $_POST['holod'];
      if ($holod=='undefined') {
        $data['holod']='Холодильник не выбран.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['vityajka'])) {
      $vityajka = $_POST['vityajka'];
      if ($vityajka=='undefined') {
        $data['vityajka']='Вытяжка не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['stiral'])) {
      $stiral = $_POST['stiral'];
      if ($stiral=='undefined') {
        $data['stiral']='Стиральная машина не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }
    if (isset($_POST['svh'])) {
      $svh = $_POST['svh'];
      if ($svh=='undefined') {
        $data['svh']='СВЧ не выбрана.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }

    //получить сообщение, которое ввёл пользователь
    if (isset($_POST['message'])) {
      $message = $_POST['message'];
      if (!validStringLength($message,0,500)) {
        $data['message']='Поле сообщение содержит недопустимое количество символов.';
        $data['result']='error';
      }
    } else {
      $data['result']='error';
    }

    //получить капчу, которую ввёл пользователь
    if (isset($_POST['captcha'])) {
      $captcha = $_POST['captcha'];
    } else {
      $data['result']='error';
    }
    // если не существует ни одной ошибки, то прододжаем...
    if ($data['result']=='success') {

      // если пользователь ввёл правильный код капчи, то...
      if ($_SESSION["code"] == $captcha) {

        //обработаем файлы, загруженные пользователем посредством элементов с name="images[]"

        // если ассоциатианый массив $_FILES["images"] существует, то
        if(isset($_FILES["images"])) {
          // переберём все файлы (изображения)
          $files = array();
          foreach ($_FILES["images"]["error"] as $key => $error) {
            // если ошибок не возникло, т.е. файл был успешно загружен на сервер, то...
            if ($error == UPLOAD_ERR_OK) {
              // имя файла на устройстве пользователя
              $nameFile = $_FILES['images']['name'][$key];
              // расширение загруженного пользователем файла в нижнем регистре
              $extFile = mb_strtolower(pathinfo($nameFile, PATHINFO_EXTENSION));
              // размер файла
              $sizefile = $_FILES['images']['size'][$key];
              //myme-тип файла
              $filetype = $_FILES['images']['type'][$key];
              // проверить расширение файла, размер файла и mime-тип
              if (!array_key_exists($extFile, $allowedExtension)) {
                $data['files']='Ошибка при загрузке файлов (неверное расширение).';
                $data['result']='error';
              } elseif ($sizefile > $maxSizeFile) {
                $data['files']='Ошибка при загрузке файлов (размер превышает 2 Мбайт).';
                $data['result']='error';
              } elseif (!in_array($filetype, $allowedExtension)){
                $data['files']='Ошибка при загрузке файлов (неверный тип файла).';
                $data['result']='error';
              } else {
                //ошибок не возникло, продолжаем...

                // временное имя, с которым принятый файл был сохранён на сервере
                $tmpFile = $_FILES['images']['tmp_name'][$key];
                // уникальное имя файла
                $newFileName = uniqid('img_', true).'.'.$extFile;
                // полное имя файла
                $newFullFileName = $pathToFile.$newFileName;
                // перемещаем файл в директорию
                if (!move_uploaded_file($tmpFile, $newFullFileName)) {
                  // ошибка при перемещении файла
                  $data['files']='Ошибка при загрузке файлов.';
                  $data['result']='error';
                } else {
                  $files[] = $newFullFileName;
                }
              }
            } else {
              //ошибка при загрузке файл на сервер
              $data['result']='error';
            }
          }
        }
      } else {
        // пользователь ввёл неправильную капчу
        $data['result']='invalidCaptcha';
      }
    }
  } else {
    //ошибка не существует ассоциативный массив $_POST["send-message"]
    $data['result']='error';
  }

  // дальнейшие действия (ошибок не обнаружено)
  if ($data['result']=='success') {
    //1. Сохрание формы в файл
    /*$output = "---------------------------------" . "\n";
    $output .= date("d-m-Y H:i:s") . "\n";
    $output .= "Имя пользователя: " . $name . "\n";
    $output .= "Адрес email: " . $email . "\n";
    $output .= "Сообщение: " . $message . "\n";
    $output .= "Планировка: " . $plan . "\n";
    if (isset($files)) {
      $output .= "Файлы: " . "\n";
      foreach ($files as $value) {
         $output .= $value . "\n";
      }
    }
    if (file_put_contents(dirname(__FILE__).'/message.txt', $output, FILE_APPEND | LOCK_EX)) {
      $data['result']='success';
    } else {
      $data['result']='error';
    }*/
    //2. Отправляем на почту

    // включить файл PHPMailerAutoload.php
    require_once dirname(__FILE__) . '/phpmailer/PHPMailerAutoload.php';

    //формируем тело письма
    $output = "Дата: " . date("d-m-Y H:i") . "\n";
    $output .= "Имя пользователя: " . $name . "\n";
    $output .= "Адрес email: " . $email . "\n";
    $output .= "Номер телефона: " . $phone . "\n";
    $output .= "Город: " . $gorod . "\n";
    $output .= "Модель кухни: " . $kuhnya . "\n";
    $output .= "Планировка кухни: " . $plan . "\n";
    $output .= "Материал верхних секций: " . $matverh . "\n";
    $output .= "Материал нижних секций: " . $matniz . "\n";
    $output .= "Столешница: " . $stolesh . "\n";
    $output .= "Посудомоечная машина: " . $posud . "\n";
    $output .= "Техника (планируемая): " . "\n";
    $output .= "Варочная панель: " . $tehnika1 . "\n";
    $output .= "Духовой шкаф: " . $tehnika2 . "\n";
    $output .= "Кофемашина: " . $tehnika3 . "\n";
    $output .= "Стиральная машина: " . $tehnika4 . "\n";
    $output .= "Вытяжка‎: " . $tehnika5 . "\n";
    $output .= "СВЧ‎: " . $tehnika6 . "\n";
    $output .= "Посудомоечная машина: " . $tehnika7 . "\n";
    $output .= "Холодильник: " . $holod . "\n";
    $output .= "Вытяжка: " . $vityajka . "\n";
    $output .= "Стиральная машина: " . $stiral . "\n";
    $output .= "СВЧ: " . $svh . "\n";
    $output .= "Сообщение: " . "\n" . $message . "\n";

    // если не используем прикрепление файлов
    // отправляем файлы в качестве ссылок в теме письма
    /*if (isset($files)) {
      $output .= "Файлы: " . "\n";
      foreach ($files as $value) {
        $href = substr($value,strpos($value, '/feedback/'));
        $output .= '<p><a href="'.$href.'">'.$href.'</a></p>' . "\n";
      }
    }*/

    // создаём экземпляр класса PHPMailer
    $mail = new PHPMailer;

    $mail->CharSet = 'UTF-8';  
    $mail->From      = 'robot@modern-teh.by';
    $mail->FromName  = 'Онлайн-расчет http://modern-teh.by';
    $mail->Subject   = 'Запрос онлайн-расчета кухни';
    $mail->Body      = $output;
    $mail->AddAddress( 'stiff@tut.by' );

    // прикрепляем файлы к письму
    if (isset($files)) {
      foreach ($files as $value) {
         $output .= $value . "\n";
         $mail->addAttachment($value);
      }
    }

    // отправляем письмо
    if ($mail->Send()) {
      $data['result']='success';
    } else {
      $data['result']='error';
    }
  }

  echo json_encode($data);

?>
