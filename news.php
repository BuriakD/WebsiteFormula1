<?php require "db.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>F1</title>
    <link rel="stylesheet" href="css/stylenews.css">
  </head>
  <body>
     <header>
      <div class="container">
	   <div class="heading clearfix">
	   <h1> </h1>       
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
          <li><a href="Photo.php">Фотографії F1</a></li>
		 <li><a href="About.php">Про сайт</a></li>
       </ul>
</nav>     
	 </div>
	 </div>
	 <h2>Новини F1</h2>	 
	  </header>
      
      <div class="container">
	  
      <p></p>
<div class="news">
<a class="fir" href="news1.php" >Хельмут Марко: В Red Bull немає місця для Феттеля <a class="fir1">23.05.2020</a>
</a>
</div>
<p></p>

<div class="news">
<a class="fir" href="news2.php" >Хорнер об обмеження аеродинамічних досліджень <a class="fir1">22.05.2020</a>
</a>
</div>
<p></p>

<div class="news">
<a class="fir" href="news3.php" >В Сільверстоуне не втрачають надію провести Гран Прі</a><a class="fir1">21.05.2020</a>
</div>
<P></P>

<div class="news">
<a class="fir" href="news4.php" >Сайнс: В McLaren привітали мене з переходом в Ferrari <a class="fir1">20.05.2020</a>
</a>
</div>
<P></P>

<div class="news">
<a class="fir" href="news5.php" >Дєвід Култхард: Феттель – хороший варіант для Aston Martin <a class="fir1">19.05.2020</a>
</a>
</div>
<P></P>

</div>
<h1></h1>     
</body>
</html>