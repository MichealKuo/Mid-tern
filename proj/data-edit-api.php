<?php
include __DIR__ . '/partials/init.php';

header('Content-Type: application/json');

$output = [
    'success' => false,
    'error' => '資料輸入異常',
    'code' => 0,
    'rowCount' => 0,
    'postData' => $_POST,
];


if(
    
    empty($_POST['name']) or
    empty($_POST['breed']) or
    empty($_POST['gender']) or
    empty($_POST['age']) or
    empty($_POST['family']) or
    empty($_POST['intro'])or
    empty($_POST['district'])
    
){
    echo json_encode($output);
    exit;
}


$sql = "UPDATE `adopted` SET 
                          `name`=?,
                          `breed`=?,
                          `gender`=?,
                          `age`=?,
                          `family`=?,
                          `intro`=?,
                          `district`=?
                          
                          

                          WHERE `sid`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    
    $_POST['name'],
    $_POST['breed'],
    $_POST['gender'],
    $_POST['age'],
    $_POST['family'],
    $_POST['intro'],
    $_POST['district'],
    $_POST['sid'],
]);

$output['rowCount'] = $stmt->rowCount();
if($stmt->rowCount()==1){
    $output['success'] = true;
    $output['error'] = '';
}else {
    $output['error'] = '資料沒有修改';
}

echo json_encode($output);
