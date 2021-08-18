<?php
// echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

$output = [
    'success' => false,
    'error' => '尚未更動任何資料',
    'code' => 0,
    'postData' => $_POST,
];



$sql = "INSERT INTO `adopted`(
    `name`, `breed`, `gender`,
    `age`,`intro`,`family`,`created_at`
    ) VALUES (
        ?,?,?,
        ?,?,?,NOW()
    )";


$stmt = $pdo->prepare($sql);
$stmt->execute([

    $_POST['name'],
    $_POST['breed'],
    $_POST['gender'],
    $_POST['age'],
    $_POST['intro'],
    $_POST['family'],
    $_POST['created_at'],
    
]);
