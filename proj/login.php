<?php
    include __DIR__. '/partials/init.php';
    $title = '登入';

    if(isset($_SESSION['members'])){
        header('Location: index_.php');    
        exit;
    }
?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">登入</h5>
                    <form name="form1" onsubmit="sendForm(); return false;">
                        <div class="form-group">
                            <label for="account">帳號</label>
                            <input type="text" class="form-control" id="account" name="account" placeholder="xxxx@gmail.com">
                            
                        </div>
                        <div class="form-group">
                            <label for="password">密碼</label>
                            <input type="password" class="form-control" id="password" name="password"placeholder="6-8位數">
                           
                        </div>
                        <button type="submit" class="btn btn-secondary">登入</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__. '/partials/scripts.php'; ?>
<script>
    function sendForm(){
        let isPass = true;
        
        if(isPass) {
            const fd = new FormData(document.form1);

            fetch('login-api.php', {
                method: 'POST',
                body: fd ,
            })
            .then(r=>r.json())
            .then(obj=>{
                console.log('result:', obj);
                if(obj.success){
                    location.href = 'index_.php'; 
                    
                } else {
                    alert(obj.error);
                }
            });
        }
    }
</script>

<?php include __DIR__. '/partials/html-foot.php'; ?>