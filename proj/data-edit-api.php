<?php
include __DIR__. '/partials/init.php';

header('Content-Type: application/json');

$output = [
    'success' => false,
    'error' => '資料輸入異常',
    'code' => 0,
    'rowCount' => 0,
    'postData' => $_POST,
];

// 練習題解答：避免直接拜訪時的錯誤訊息
if(
    empty($_POST['sid']) or
    empty($_POST['name']) or
    empty($_POST['gender']) or
    empty($_POST['age']) or
    empty($_POST['family']) or
    empty($_POST['intro'])
){
    echo json_encode($output);
    exit;
}





$sql = "UPDATE `adopted` SET 
                          `name`=?,
                          `gender`=?,
                          `age`=?,
                          `family`=?,
                          `intro`=?
                          WHERE `sid`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['name'],
    $_POST['gender'],
    $_POST['age'],
    $_POST['family'],
    $_POST['intro'],
    $_POST['sid'],
]);

$output['rowCount'] = $stmt->rowCount(); // 修改的筆數
if($stmt->rowCount()==1){
    $output['success'] = true;
    $output['error'] = '';
} else {
    $output['error'] = '資料沒有修改';
}

echo json_encode($output);
