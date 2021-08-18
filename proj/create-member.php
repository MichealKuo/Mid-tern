<?php
    include __DIR__. '/partials/init.php';
    $title = '註冊';


?>
<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>

                    <form action="../proj/create-member-api.php" name="form1" method="post">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="姓名長度必須大於兩位數">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="text" class="form-control" id="email" name="email"placeholder="xxx@gmail.com">
                            <small class="form-text"></small>
                        </div>
                        <!-- <div class="form-group">
                            <label for="password">密碼設定 *</label>
                            <input type="text" class="form-control" id="password" name="password"placeholder="6-8位數">
                            <small class="form-text"></small>
                        </div> -->
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="09-xx-xxx-xxx">
                            <small class="form-text"></small>
                        </div>
                        <div class="form-group">
                            <label for="birthday">Birthday</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                            <!-- 可以把type text  -->
                            <small class="form-text"></small>
                        </div>
                        

                        <button type="submit" class="btn btn-secondary" name ="create">Create</button>
                    </form>


                </div>
            </div>
        </div>
    </div>


</div>
<?php include __DIR__. '/partials/scripts.php'; ?>
<script>
    // const email_re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

    // const name = document.querySelector('#name');
    // const email = document.querySelector('#email');

    // function checkForm(){
    //     // TODO :欄位的外觀要回復原來的狀態
    //     name.nextElementSibling.innerHTML = '';
    //     name.style.border = '1px #CCCCCC solid';
    //     email.nextElementSibling.innerHTML = '';
    //     email.style.border = '1px #CCCCCC solid';
    //     // TODO :如果格式不符合 要有欄位提示不同外觀
    //     let isPass = true;
    //     if(name.value.length < 2){
    //         isPass = false;
    //         name.nextElementSibling.innerHTML = '請填寫正確的姓名';
    //         name.style.border = '1px red solid';
    //     }

    //     if(! email_re.test(email.value)){
    //         isPass = false;
    //         email.nextElementSibling.innerHTML = '請填寫正確的 Email 格式';
    //         email.style.border = '1px red solid';
    //     }

    //     if(isPass){
    //         const fd = new FormData(document.form1);
    //         fetch('create-member-api.php', {
    //             method: 'POST',
    //             body: fd
    //         })
    //             .then(r=>r.json())
    //             .then(obj=>{
    //                 console.log(obj);
    //                 if(obj.success){
    //                     location.href = './data-list.php';
    //                 } else {
    //                     alert(obj.error);
    //                 }
    //             })
    //             //前端資料用print_r近來 後端是JSON是出現紅色錯誤
    //             //所以要用catch這屬性去除錯 
    //             .catch(error=>{
    //                 console.log('error:', error);
    //             });
    //     }
    // }
</script>
<?php include __DIR__. '/partials/html-foot.php'; ?>