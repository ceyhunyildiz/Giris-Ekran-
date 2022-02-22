<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kullanıcı Sayfası</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Merhaba, <span>kullanıcı</span></h3>
      <h1>Hoşgeldiniz <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Burası kullanıcı sayfası :)</p>
      <a href="login_form.php" class="btn">Giriş Yap</a>
      <a href="register_form.php" class="btn">Kayıt Ol</a>
      <a href="logout.php" class="btn">Çıkış</a>
   </div>

</div>

</body>
</html>