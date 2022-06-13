<?php require "db.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>F1</title>
    <link rel="stylesheet" href="css/styleAbout.css">      
  </head>
  <body>
     <header>
      <div class="container">
	   <div class="heading clearfix">
     <nav>
       <ul class="menu">
          <?php if( isset($_SESSION['logged_user'])) : 
            ?>
          <li><a>Вітаю, <?php echo $_SESSION['logged_user']->login; ?></a></li>  
          <li><a a href="chat.php">Чат</a></li>
          <li><a a href="Logout.php">Вийти</a></li>
          <?php else :?>
          <li><a href="login.php">авторизуватись</a></li>
          <li><a href="signup.php">Реєстрація</a></li>
          <?php endif; ?>
          <li><a href="index.php">Головна сторінка</a></li>
          <li><a href="News.php">Новини F1</a></li>
          <li><a href="Photo.php">Фотографії F1</a></li>
       </ul>
</nav>        
	 </div>
	 </div>
	 <h2>Про сайт</h2>
   <div class="container">

    <p class="fir">Єтот сайт був створений для розвитку і просування F1. На сайті можливо Дивитися новини F1 та доступний чат зареєстрованим користувач. </p>
  <p class="fir">Сайт був створений студентом групи КТКТ ЧНТУ КН-1701 Буряк Дмитрий.</p>
    </div>
    </header>
</body>
</html>
