<?php
include __DIR__. '/partials/init.php'; 
header('Content-Type: application/json');



$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'rowCount' => 0,
    'postData' => $_POST,
];


if(strlen($_POST['name'])<2){
    $output['error'] = '姓名長度太短';
    $output['code'] = '410';

    echo json_encode($output);
    exit;

}
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $output['error'] = 'email 格式錯誤';
    $output['code'] = 420;

    echo json_encode($output);
    exit;

}

$sql = "INSERT INTO `members`(`avatar`, `name`, `email`, `password`, `mobile`, `birthday`, `hash`, `create_at`) VALUES (
                    ?,?,?,?,
                    ?,?,?, NOW()

)";

    
//只要資料是由用戶端傳送進來 一律使用prepare

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['avatar'],
    $_POST['name'],
    $_POST['email'],
    $_POST['password'],
    $_POST['birthday'],
    $_POST['mobile'],
    $_POST['birthday'],
    $_POST['hash'],
    

]);


$output['rowCount'] = $stmt->rowCount();
if($stmt->rowCount()==1){
    $output['success'] = true;
}

echo json_encode($output);