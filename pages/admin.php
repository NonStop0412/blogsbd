<?php 
  require "../includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Блог IT_Минималиста!</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>

  <div id="wrapper">

    <?php include "../includes/header.php"; ?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">

            <div class="block">
                       <?php

$login = $_POST['login'];
$password = $_POST['password'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if ( mysqli_num_rows($count) == 0 )
{
  echo 'Вы не зарегистрированы' . "</br> <a href='login.php'>Повторить попытку</a>";
} else {
   echo 'Привет, ' . $login . '!' . '<a href="add.php">Добавить статью</a>';
}
?>
            </div>

          </section>
          <section class="content__right col-md-4">
          <?php include "../includes/sidebar.php" ?>
          </section>
        </div>
      </div>
    </div>

<?php include "../includes/footer.php"; ?>

  </div>

</body>
</html>