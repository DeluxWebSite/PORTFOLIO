<?php
// ini_set('display_errors','On');
// error_reporting('E_ALL');
// echo '<pre>';
// print_r ($_POST);
// echo '</pre>';
// echo '<pre>';
// print_r ($_FILES);
// $fileArr1 = $_FILES['file1']['name'];
// $fileArr2 = $_FILES['file2']['name'];
// echo '</pre>';



$fio = $_POST["fio"];
$fio = htmlspecialchars($fio);
$fio = urldecode($fio);
$fio = trim($fio);
$grz = $_POST["grz"];
$grz = htmlspecialchars($grz);
$grz = urldecode($grz);
$grz = trim($grz);
$adress = $_POST["adress"];
$adress = htmlspecialchars($adress);
$adress = urldecode($adress);
$adress = trim($adress);
$numberHome = $_POST["numberHome"];
$numberHome = htmlspecialchars($numberHome);
$numberHome = urldecode($numberHome);
$numberHome = trim($numberHome);

// echo '<pre>';
// print_r($fio);
// print_r($grz);
// print_r($adress);
// print_r($numberHome);
// echo '</pre>';

// $attachment1 = chunk_split(base64_encode(file_get_contents($_FILES['file1']['tmp_name'])));
//     $filename1 = $_FILES['file1']['name'];
//     $filetype1 = $_FILES['file1']['type'];
//     $filesize1 = $_FILES['file1']['size'];
// $attachment2 = chunk_split(base64_encode(file_get_contents($_FILES['file2']['tmp_name'])));
//     $filename1 = $_FILES['file2']['name'];
//     $filetype1 = $_FILES['file2']['type'];
//     $filesize1 = $_FILES['file2']['size'];

$to = "testmailegpp@rambler.ru"; // емайл получателя данных 

$tema = "Фиксация транспортных средств с закрытыми ГРЗ в зоне ЕГПП"; // тема полученного емайла 

$from = "mail@delux.website"; // Почта отправителя

$message = "ФИО: ".$fio."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "ГРЗ: ".$grz."<br>"; //полученное из формы 
$message .= "Адресс: ".$adress."<br>"; //полученное из формы 
$message .= "Номер дома: ".$numberHome."<br>"; //полученное из формы 

// $headers= "MIME-Version: 1.0\r\n";
// $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
// $headers .= "From: Тестовое письмо <mail@delux.website>\r\n"; // от кого письмо
$filename = $_FILES['file1']['name'];
$filename2 = $_FILES['file2']['name'];

$boundary = "---"; //Разделитель
/* Заголовки */
$headers = "From: $from\nReply-To: $from\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
$body = "--$boundary\n";
/* Присоединяем текстовое сообщение */
$body .= "Content-type: text/html; charset='utf-8'\n";
$body .= "Content-Transfer-Encoding: quoted-printablenn";
$body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
$body .= $message."\n";
$body .= "--$boundary\n";

if ($_FILES['file1']['error'] == UPLOAD_ERR_OK) {
        $file = fopen($_FILES['file1']['tmp_name'], "r"); //Открываем файл
        $text = fread($file, filesize($_FILES['file1']['tmp_name'])); //Считываем весь файл
        fclose($file); //Закрываем файл
}

/* Добавляем тип содержимого, кодируем текст файла и добавляем в тело письма */
$body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($filename)."?=\n";
$body .= "Content-Transfer-Encoding: base64\n";
$body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
$body .= chunk_split(base64_encode($text))."\n";
$body .= "--$boundary\n";

if ($_FILES['file2']['error'] == UPLOAD_ERR_OK) {
    $file2 = fopen($_FILES['file2']['tmp_name'], "r"); //Открываем файл
    $text2 = fread($file2, filesize($_FILES['file2']['tmp_name'])); //Считываем весь файл
    fclose($file2); //Закрываем файл
}
/* Добавляем тип содержимого, кодируем текст файла и добавляем в тело письма */
$body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($filename2)."?=\n";
$body .= "Content-Transfer-Encoding: base64\n";
$body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename2)."?=\n\n";
$body .= chunk_split(base64_encode($text2))."\n";
$body .= "--".$boundary ."--\n";

mail($to, $tema, $body, $headers);

// 




// mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных









// Токен
const TOKEN = '5328246320:AAFb-Ntm0RhSvBNm28vCm23KXF7I2lPgSMA';

// ID чата
const CHATID = '-1001959718478';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $fileSendStatus = '';
    $textSendStatus = '';
    $msgs = [];

    // if (!empty($fio) && !empty($grz) &&! empty($adress) && !empty($numberHome)) {
        if(!empty($_POST)){
        $txt = '';

        if (isset($fio) && !empty($fio)) {
            $txt .=
                'ФИО: ' . strip_tags(trim(urlencode($fio))) . '%0A';
        }

        if (isset($grz) && !empty($grz)) {
            $txt .=
                'ГРЗ: ' .
                strip_tags(trim(urlencode($grz))) .
                '%0A';
        }
        if (isset($adress) && !empty($adress)) {
            $txt .=
                'Адрес: ' .
                strip_tags(trim(urlencode($adress))) .
                '%0A';
        }
        if (isset($numberHome) && !empty($numberHome)) {
            $txt .=
                'Номер дома: ' .
                strip_tags(trim(urlencode($numberHome))) .
                '%0A';
        }


        $textSendStatus = @file_get_contents(
            'https://api.telegram.org/bot' .
                TOKEN .
                '/sendMessage?chat_id=' .
                CHATID .
                '&parse_mode=html&text=' .
                $txt
        );
// 
 
        //   $urlFile =  "https://api.telegram.org/bot" . TOKEN . "/sendPhoto";
           
          // Путь загрузки файлов
          move_uploaded_file($_FILES['file1']['tmp_name'], 'uploads/' . $_FILES['file1']['name']);
          move_uploaded_file($_FILES['file2']['tmp_name'], 'uploads/' . $_FILES['file2']['name']);
        //   echo '<pre>';
        //   print_r ($path);
        //   echo '</pre>';
           
          // Загрузка файла и вывод сообщения
        //   $mediaData = [];
        //   $postContent = [
        //     'chat_id' => CHATID,
        //   ];
          $path = str_replace("\\",'/',"https://".$_SERVER['HTTP_HOST'].substr(getcwd(),strlen($_SERVER['DOCUMENT_ROOT']))).'/uploads/';

          
        //   $postContent[$_FILES['file1']['name']] = new CURLFile(realpath($path));
        //   $mediaData[0] = ['photo' => $path . $_FILES['file1']['name']];
          
        //   $postContent[$_FILES['file2']['name']] = new CURLFile(realpath($path));
        //   $mediaData[1] = ['photo' => $path . $_FILES['file2']['name']];  
        
        //   $postContent[] = json_encode($mediaData);
       
            // echo '<pre>';
            // print_r($path);
            // print_r ($postContent);
            // print_r($mediaData);
            // echo '</pre>';
            $arrayQuery = [
                'chat_id' => CHATID,
                'media' => json_encode([
                    ['type' => 'photo', 'media' => 'attach://'.$_FILES['file1']['name']],
                    ['type' => 'photo', 'media' => 'attach://'.$_FILES['file2']['name']],
                ]),
                $_FILES['file1']['name'] => new CURLFile($path . $_FILES['file1']['name']),
                $_FILES['file2']['name'] => new CURLFile($path . $_FILES['file2']['name']),
            ];
            $ch = curl_init('https://api.telegram.org/bot'. TOKEN .'/sendMediaGroup');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $res = curl_exec($ch);
            curl_close($ch);
// 
        if (isset(json_decode($textSendStatus)->{'ok'})) {
            // echo json_encode('SUCCESS');
            header('Location: index.html');
            exit();
        } else {
            // echo json_encode('ERROR');
            //
            // echo json_decode($textSendStatus);
        }
    } else {
        // echo json_encode('NOTVALID');
    }
} else {
    header('Location: index.html');
    exit();
}