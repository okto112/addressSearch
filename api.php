<?php
header("Content-Type: application/json; charset=utf-8");

$zipcode = $_GET['zipcode'];

// 郵便番号パラメータが存在するかチェック
if (!isset($zipcode) || empty($zipcode)) {
    echo json_encode([
        'status' => 'error',
        'message' => '郵便番号が指定されていません'
    ]);
    exit;
}elseif (strlen($zipcode) != 7) {
    echo json_encode([
        'status' => 'error',
        'message' => '郵便番号は7桁で入力してください'
    ]);
    exit;
}elseif (!is_numeric($zip)) {
    echo json_encode([
        'status' => 'error',
        'message' => '数字以外が入力されています'
    ]);
    exit;
}

$response = file_get_contents('https://zipcloud.ibsnet.co.jp/api/search?zipcode='.$zipcode);

echo $response;
exit;