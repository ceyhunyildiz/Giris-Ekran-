<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Sayfası</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Merhaba, <span>admin</span></h3>
      <h1>Hoşgeldiniz <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Admin sayfasına hoş geldiniz :)</p>
      <a href="login_form.php" class="btn">Giriş Yap</a>
      <a href="register_form.php" class="btn">Kayıt Ol</a>
      <a href="logout.php" class="btn">Çıkış</a>
   </div>

</div>

</body>
</html>