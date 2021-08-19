
<?php
include __DIR__. '/partials/init.php';

header('Content-Type: application/json');


$output = [
    'success' => false,
    'error' => '尚未更動任何資料',
    'code' => 0,
    'postData' => $_POST,
];


if(empty($_POST['name'])){
    echo json_encode($output);
    exit;
}

// 預設是沒有上傳資料，沒有上傳成功
$isSaved = false;




if(! $isSaved){
    $sql = "UPDATE `members` SET `name`=? WHERE sid=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $_SESSION['user']['sid'],
    ]);

    if($stmt->rowCount()) {
        $_SESSION['user']['name'] = $_POST['name'];
        $output['error'] = '';
        $output['success'] = true;
    }
}


if(! $isSaved){
    $sql = "UPDATE `members` SET `mobile`=? WHERE sid=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['mobile'],
        $_SESSION['user']['sid'],
    ]);

    if($stmt->rowCount()) {
        $_SESSION['user']['mobile'] = $_POST['mobile'];
        $output['error'] = '';
        $output['success'] = true;
    }
}


echo json_encode($output);
