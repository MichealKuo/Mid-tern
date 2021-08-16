

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
if(
    empty($_POST['sid']) or
    empty($_POST['name']) or
    empty($_POST['email']) or
    empty($_POST['mobile']) or
    empty($_POST['birthday']) 
    
){
    echo json_encode($output);
    exit;
}



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





$sql = "INSERT INTO `members`(
    `name`, `email`, `mobile`,
    `birthday`,`created_at`
    ) VALUES (
        ?,?,?,
        ?, NOW()
    )";

    
//只要資料是由用戶端傳送進來 一律使用prepare

$stmt = $pdo->prepare($sql);
$stmt->execute([

    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthday'],
]);



$output['rowCount'] = $stmt->rowCount();
if($stmt->rowCount()==1){
    $output['success'] = true;
}

echo json_encode($output);