<pre>
<?php

$folder = __DIR__. '/imgs/';


// 如果有上傳檔案
if(! empty($_FILES)){

    if(move_uploaded_file(
        $_FILES['avatar']['tmp_name'],  //從暫存區搬到 新的資料夾
        $folder. $_FILES['avatar']['name']
    )){
        echo 'OK';
    } else {
        echo 'move file error';
    }

} else {
    echo 'no files';
}




?>
</pre>