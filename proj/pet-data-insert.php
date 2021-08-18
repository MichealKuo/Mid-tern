<?php
    include __DIR__. '/partials/init.php';
    $title = '新增資料';
    $row = [
        "breed" => "0",
        "gender" => "0",
        "age" => "0",
    ];
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
                    <h5 class="card-title">新增寵物資料</h5>

                    <form name="form1" onsubmit="checkForm(); return false;" action="pet-data-insert-api.php">
                        <div class="form-group">
                            <label for="nickname">別名 *</label>
                            <input type="text" class="form-control" id="nickname" name="nickname">
                            <small class="form-text "></small>
                        </div>
                        <div class="form-group">
                        <label for="cat-breed">品種</label>
                        <select class="form-control" id="cat-breed" name="breed">
                            <option value="" disabled selected>-- 請選擇... --</option>
                            <option value="1" <?= $row['breed']==1 ? 'selected' : '' ?>>米克斯</option>
                            <option value="2" <?= $row['breed']==2 ? 'selected' : '' ?>>英國短毛</option>
                            <option value="3" <?= $row['breed']==3 ? 'selected' : '' ?>>蘇格蘭摺耳</option>
                            <option value="4" <?= $row['breed']==4 ? 'selected' : '' ?>>布偶</option>
                            <option value="5" <?= $row['breed']==5 ? 'selected' : '' ?>>波斯</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="cat-gender">性別</label>
                        <select class="form-control" id="cat-gender" name="gender">
                            <option value="" disabled selected>-- 請選擇... --</option>
                            <option value="1" <?= $row['gender']==1 ? 'selected' : '' ?>>male</option>
                            <option value="2" <?= $row['gender']==2 ? 'selected' : '' ?>>female</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="cat-age">年齡</label>
                        <select class="form-control" id="cat-age" name="age">
                            <option value="" disabled selected>-- 請選擇... --</option>
                            <option value="1" <?= $row['age']==1 ? 'selected' : '' ?>>成年</option>
                            <option value="2" <?= $row['age']==2 ? 'selected' : '' ?>>幼年</option>
                        </select>
                        </div>
                        <div class="form-group d-flex" style="flex-direction: column;">
                            <label for="intro">寵物描述</label>
                            <textarea name="intro" id="intro" cols="50" rows="3" style="border-radius: 0.3rem; border:1px solid #BDC0BA"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="avatar">寵物大頭貼</label>
                            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*" multiple>
                            <?php if(empty( $r['avatar'])): ?>
                                <!-- 預設的大頭貼 -->
                            <?php else: ?>
                                <!-- 顯示原本的大頭貼 -->
                                <img src="imgs/<?= $r['avatar'] ?>" alt="" width="300px">
                            <?php endif; ?>

                        </div>

                        <button type="button" class="btn btn-primary" onclick="location.href='data-list.php'" >Create</button>
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
            fetch('pet-data-insert-api.php', {
                method: 'POST',
                body: fd
            })
                .then(r=>r.json())
                .then(obj=>{
                    console.log(obj);
                    if(obj.success){
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
<!-- //可以把他分成4部分 在利用include __Dir__合併在php頁成現 -->