<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index_.php">HOME<i class="fas fa-cat"></i><span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./data-list.php">認養浪浪<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            領養流程/須知事項
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">流程</a>
            <a class="dropdown-item" href="#">飼育方針</a>          
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">周邊商品平台</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <?php if(isset($_SESSION['user'])): ?>
        <li class="nav-item active" style="list-style: none; color:goldenrod;">
            <a class="nav-link" ><?= $_SESSION['user']['name'] ?></a>
        </li>
        <button type="submit"  class="btn btn-light"><a class="nav-link" href="profile-edit.php" style="color: gray;">編輯個人資料</a>
        </button>
        <button type="submit"  class="btn btn-light"><a class="nav-link" href="logout.php" style="color: gray;">登出</a>
        </button>
        <?php else: ?>
        <button type="submit"  class="btn btn-light"><a class="nav-link" href="login.php" style="color: gray;">登入</a>
        </button>
        <button type="submit"  class="btn btn-light"><a class="nav-link" href="create-member.php" style="color: gray;">註冊</a>
        </button>
        
        <?php endif; ?>
      </form>
    </div>
  </div>

</nav>