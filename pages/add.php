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

              

                <div class="full-text">
<h1>Добавление статьи</h1>


            </div>
<div id="article-add-form" class="block" >
<div class="block__content">
<form class="form" method="POST" >

<?php 
 if( isset($_POST['do_post']) )
{ 
 $errors = array();

if( $_POST['name'] == '' )
{
 $errors[] = 'Введите Имя!';
}

if( $_POST['categorie_id'] == '' )
{
$errors[] = 'Введите id категории!';
}

if( $_POST['text'] == '' )
{
$errors[] = 'Введите Текст!';
}

if ( empty($errors) )
{
 // добавить статью

 mysqli_query($connection," INSERT INTO `articles` (`name`,`categorie_id`, `text` ) 
  VALUES ('".$_POST['name']."', '".$_POST['categorie_id']."', '".$_POST['text']."' )");

 echo '<span style="color: green; fotn-weight: bold; Margin-bottom: 10px; display: block;">Статья успешно добавлена!</span>';
} else
{
// вывести ошибку
echo '<span style="color: red; fotn-weight: bold; Margin-bottom: 10px; display: block;">' . $errors['0'] . '</span>';
}
}
?>
                  <div class="form__group">
                    <div class="row">
                      <div class="col-md-6">
                        <input type="text" class="form__control" name="name" placeholder="Название" value="<?php echo $_POST['name']; ?>">
                      </div>
                       <div class="col-md-6">
                        <input type="text" class="form__control" name="categorie_id" placeholder="Категория (id)" value="<?php echo $_POST['categorie_id']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form__group">
                    <textarea name="text" class="form__control" placeholder="Текст статьи ..."><?php echo $_POST['text']; ?></textarea>
                  </div>
                  <div class="form__group">
                    <input type="submit" class="form__control" name="do_post" value="Добавить статью">
                  </div>
                </form>
              </div>
            </div>
          </section>
          <section class="content__right col-md-4">
             <?php include "../includes/sidebar.php" ?>
          </section>
        </div>
      </div>
    </div>


  </div>

</body>
</html>