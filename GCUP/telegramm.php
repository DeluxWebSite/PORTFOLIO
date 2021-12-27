<?php
$msgs = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //message in telega
  $token = "#";
  $chat_id = "#";
  $bot_url = "https://api.telegram.org/bot{$token}/";
  $urlForPhoto = $bot_url . "sendPhoto?chat_id=" . $chat_id;


  if (!empty($_POST['address']) && !empty($_POST['coord_map'])) {


    if (!empty($_FILES['file']['tmp_name'])) {



      // echo json_encode(($_FILES['file']['tmp_name']));


      // Путь загрузки файлов
      $path = __DIR__ . '/tmp/';

      $types = array('video/mp4', 'image/png', 'image/jpeg', 'image/jpg');

      $size = 15000000;

      if (!in_array($_FILES['file']['type'], $types)) {
        $msgs['err'] = 'Запрещённый тип файла.';
        echo json_encode($msgs);
        die();
      }

      if ($_FILES['file']['size'] > $size) {
        $msgs['err'] = 'Слишком большой размер файла.';
        echo json_encode($msgs);
        die('Слишком большой размер файла.');
      }

      // Загрузка файла и вывод сообщения
      if (!@copy($_FILES['file']['tmp_name'], $path . $_FILES['file']['name'])) {
        $msgs['err'] = 'Что-то пошло не так. Файл не отправлен!';
        echo json_encode($msgs);
      } else {
        $filePath = $path . $_FILES['file']['name'];
        $post_fields = array('chat_id' => $chat_id, 'photo' => new CURLFile(realpath($filePath)));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
        curl_setopt($ch, CURLOPT_URL, $urlForPhoto);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
        $output = curl_exec($ch);
        unlink($filePath);
      }
    }

    if (isset($_POST['address'])) {
      if (!empty($_POST['address'])) {
        $adr = "Адрес: " . strip_tags($_POST['address']) . "%0A";
      }
    }

    if (isset($_POST['coord_map'])) {
      if (!empty($_POST['coord_map'])) {
        $coord = "Координаты: " . strip_tags($_POST['coord_map']) . "%0A";
      }
    }

    if (isset($_POST['map_district'])) {
      if (!empty($_POST['map_district'])) {
        $dist = "Район: " . strip_tags($_POST['map_district']) . "%0A";
      }
    }

    if (isset($_POST['comment'])) {
      if (!empty($_POST['comment'])) {
        $comm = "Комментарий: " . strip_tags($_POST['comment']) . "%0A";
      }
    }
    if (isset($_POST['fn1'])) {
      if (!empty($_POST['fn1'])) {
        $fn = "FileName: " . strip_tags($_POST['fn1']) . "%0A";
      }
    }

    $params['text'] = 'Отправить в работу';
    $params['disable_notification'] = TRUE;

    $button_en = array('text' => 'В отдел1', 'callback_data' => '/lang_english');
    $button_ru = array('text' => 'В отдел2', 'callback_data' => '/lang_russian');

    $keyboard = array('inline_keyboard' => array(array($button_en, $button_ru)));
    $params['reply_markup'] = json_encode($keyboard, TRUE);

    $txt = $adr . $coord . $dist . $comm . $fn . "&reply_markup=" . json_encode($keyboard);

    $sendTextToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");

    if ($output && $sendTextToTelegram) {
      $msgs['okSend'] = 'Спасибо за отправку вашего сообщения и фото!';
      echo json_encode($msgs);
      return true;
    } elseif ($sendTextToTelegram) {
      $msgs['okSend'] = 'Спасибо за отправку вашего сообщения!';
      echo json_encode($msgs);
      return true;
    } else {
      $msgs['err'] = 'Ошибка. Сообщение не отправлено!';
      echo json_encode($msgs);
      die('Ошибка. Сообщение не отправлено!');
    }
  } else {
    $msgs['err'] = 'Ошибка. Вы заполнили не все обязательные поля!';
    echo json_encode($msgs);;
  }
} else {
  header("Location: https://test.delux.website");
}
