
<?php
include __DIR__. '/partials/init.php';




$sql = "INSERT INTO `adopted`( `name`, `breed`, `gender`, `age`,  `family`, `intro`, `district`, `created_at`) VALUES (?,?,?,?,?,?,?,NOW())";

$stmt = $pdo->prepare($sql);
$stmt->execute([

    $_POST['name'],
    $_POST['breed'],
    $_POST['gender'],
    $_POST['age'],
    $_POST['family'],
    $_POST['intro'],
    $_POST['district'],
    
]);



$output['rowCount'] = $stmt->rowCount();
if($stmt->rowCount()==1){
    $output['success'] = true;
}

echo json_encode($output);