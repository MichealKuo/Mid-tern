

<?php
include __DIR__. '/partials/init.php'; 

header('Content-Type: application/json');


if (isset($_POST['create'])){
    include __DIR__. '../proj/partials/db_connect.php'; 
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    
    $user_data = 'name='.$name. 'email='.$email;

    if(empty($name)){
        header("Location:../create-member.php?error=Name is required&$user_data");
    }else if (empty($email)){
        header("Location:../create-member.php?error=Email is required&$user_data");
    }else {
       $sql = "INSERT INTO users(name, email) VALUES('$name', '$email')";
       $result = mysqli_query($pdo, $sql );
       if ($result) {
           echo "success";
       }else {
            header("Location:../create-member.php?error=unknown error occurred&$user_data");
       }
    }
}



