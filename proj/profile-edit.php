<?php
    // 資料表要增加一個存放圖片檔名的欄位
    // ALTER TABLE `members` ADD `avatar` VARCHAR(255) NULL DEFAULT '' AFTER `id`;

    include __DIR__. '/partials/init.php';
    $title = '修改個人資料';

    if(! isset($_SESSION['user'])){
        header('Location: index_.php');
        exit;
    }


    $sql = "SELECT * FROM `members` WHERE sid=". intval($_SESSION['user']['sid']);

    $r = $pdo->query($sql)->fetch();

    if(empty($r)){
        header('Location: index_.php');
        exit;
    }
?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>
<style>
    form .form-group small {
        color: red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">修改個人資料</h5>

                    <form name="form1" onsubmit="checkForm(); return false;">
                        <div class="form-group">
                            <label for="email">email (帳號不能修改)</label>
                            <input type="text" class="form-control" disabled
                                   value="<?= htmlentities($r['email']) ?>">
                            <small class="form-text "></small>
                        </div>
                        <div class="form-group">
                            <label for="name">暱稱</label>
                            <input type="text" class="form-control" id="nickname" name="name"
                                   value="<?= htmlentities($r['name']) ?>">
                            <small class="form-text "></small>
                        </div>
                        <div class="form-group">
                            <label for="name">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                   value="<?= htmlentities($r['mobile']) ?>">
                            <small class="form-text "></small>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">修改</button>
                        <button type="button" class="btn btn-primary" onclick="location.href='pet-data-insert.php'">新增寵物認養資料</button>
                    </form>


                </div>
            </div>
        </div>
    </div>


</div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<script>

    function checkForm(){

            const fd = new FormData(document.form1);
            fetch('profile-edit-api.php', {
                method: 'POST',
                body: fd
            })
                .then(r=>r.json())
                .then(obj=>{
                    console.log(obj);
                    if(obj.success){
                        location.href = 'data-list.php'
                        alert('修改成功');
                    } else {
                        alert(obj.error);
                    }
                })
                .catch(error=>{
                    console.log('error:', error);
                });


    }
</script>
<?php include __DIR__. '/partials/html-foot.php'; ?>