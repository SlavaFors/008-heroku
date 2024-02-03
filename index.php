<?php 
session_start();
?>
<html>
  <head>
    <title>ДЗ 008-heroku</title>
  </head>
  <body>
    <?php 
include('about.php');
if (isset($_SESSION['user'])) {
echo 'Добрый день, '. $_SESSION['user'].'!';
echo '<br> <a href="exit.php">Выйти</a>';
}
else {
  include('form.php');
     }
?> 
  </body>
</html>