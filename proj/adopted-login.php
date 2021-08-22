<?php
    include __DIR__. '/partials/init.php';
    $title = '登入';

    if(isset($_SESSION['user'])){
        header('Location: index_.php');    //redirect 直接跳轉到別的頁面
        exit;
    }


?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>
    <style>
        
        form .form-group small {
            color: red;
            display: none;
        }
    </style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">登入</h5>
                    <form name="form1" onsubmit="sendForm(); return false;">
                        <div class="form-group">
                            <label for="account">帳號</label>
                            <input type="text" class="form-control" id="account" name="account">
                            <small class="form-text">請填寫帳號</small>
                        </div>
                        <div class="form-group">
                            <label for="password">密碼</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small class="form-text">請填寫密碼</small>
                        </div>

                        <button type="submit" class="btn btn-primary">登入</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<script>
    //nextElementSibling 屬性返回指定元素之後下一個 兄弟元素 (指定父層的下一層子層)
    function sendForm(){
        let isPass = true;
         
        if(isPass) {
            const fd = new FormData(document.form1);

            fetch('adopted-login-api.php', {
                method: 'POST',
                body: fd ,
            })
            .then(r=>r.json())
            .then(obj=>{
                console.log('result:', obj);
                if(obj.success){
                    location.href = 'adopted-data-list.php'; 
                    // 如果成功 跳轉到index_.php的頁面
                } else {
                    alert(obj.error);
                }
            });
        }

    }
</script>
<?php include __DIR__. '/partials/html-foot.php'; ?>