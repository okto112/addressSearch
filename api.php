<?php

// header("Content-Type: application/json; charset=UTF-8");

// 郵便番号パラメータが存在するかチェック
// if (!isset($_GET['zipcode']) || empty($_GET['zipcode'])) {
//     echo json_encode([
//         'status' => 400,
//         'message' => '郵便番号が指定されていません'
//     ]);
//     exit;
// }

// $zipcode = urlencode($_GET['zipcode']);
// $url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . $zipcode;

// // file_get_contents で API にアクセス
// $response = @file_get_contents($url);
// $zipcode = $_GET['zipcode'];
// $response = file_get_contents('https://zipcloud.ibsnet.co.jp/api/search?zipcode='.$zipcode);

// エラー処理
// if ($response !== false) {
//     echo $response;
// } else {
//     echo json_encode([
//         'status' => 500,
//         'message' => 'APIリクエストに失敗しました',
//         'error' => error_get_last()
//     ]);
// }

header("Content-Type: application/json; charset=utf-8");
$zipcode = $_GET['zipcode'];
$response = file_get_contents('https://zipcloud.ibsnet.co.jp/api/search?zipcode='.$zipcode);
echo $response;
exit;