<?php

echo '<pre>';
print_r ($_POST);
echo '</pre>';
// echo '<pre>';
// print_r ($_FILES);
// echo '</pre>';

$fio = $_POST["fio"];
$grz = $_POST["grz"];
$adress = $_POST["adress"];
$numberHome = $_POST["numberHome"];
// $fileArr1 = $_FILES['file1'];
// $fileArr2 = $_FILES['file2'];
echo '<pre>';
print_r($fio);
print_r($grz);
print_r($adress);
print_r($numberHome);
echo '</pre>';
// Токен
const TOKEN = '5328246320:AAFb-Ntm0RhSvBNm28vCm23KXF7I2lPgSMA';

// ID чата
const CHATID = '1358397522';



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

        if (isset(json_decode($textSendStatus)->{'ok'})) {
            echo json_encode('SUCCESS');
        } else {
            echo json_encode('ERROR');
            //
            echo json_decode($textSendStatus);
        }
    } else {
        echo json_encode('NOTVALID');
    }
} else {
    header('Location: /');
}