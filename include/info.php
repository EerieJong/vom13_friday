<?php

  session_start();
  // 세션 존재 여부 체크
  if(isset($_SESSION['user_id'])){
    $userid = $_SESSION['user_id'];
  } else {
    $userid = "";
  }

?>

<ul class="info">
  <li class="sns">
    <ul>
      <li><a href="#"><img src="images/sns-icon-1.svg" alt="instagram"></a></li>
      <li><a href="#"><img src="images/sns-icon-2.svg" alt="facebook"></a></li>
      <li><a href="#"><img src="images/sns-icon-3.svg" alt="pinterest"></a></li>
    </ul>
  </li>
  <li class="cart"><a href="#"><i class="ri-shopping-cart-line"></i><em> (0) </em></a></li>
  <?php if(!$userid){ ?>
  <li class="user"><a href="/vom13_toy_template/signin.php"><i class="ri-user-fill"></i></a></li>
  <?php } else{ ?>
  <li class="loggedIn">
    <span>태지님</span> &nbsp;|&nbsp; <a href="/vom13_toy_template/php/logout.php">Logout</a>
  </li>
<?php } ?>
</ul>