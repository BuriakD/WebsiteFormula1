<?php require "db.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>F1</title>
    <link rel="stylesheet" href="css/stylePhoto.css">
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
          <li><a href="News.php">Новини F1</a></li>
          <li><a href="index.php">Головна сторінка</a></li>
		 <li><a href="About.php">Про сайт</a></li>
       </ul>
</nav>     
	 </div>
	 </div>
	 <h2>Фотографії F1</h2>
	  </header>
      <div class="container">
      <h3 style="text-align:center;">Різні фотографії F1</h3>   
      <img src="img/F5.jpg" width="930px" style="margin:0px"></a>
      <h1></h1>
      <img src="img/F6.jpg" width="930px" style="margin:0px"></a>
      <h1></h1>
      <img src="img/F7.jpg" width="930px" style="margin:0px"></a>
      <h1></h1>
      <img src="img/F8.jpg" width="930px" style="margin:0px"></a>
      <h1></h1>
      <img src="img/F12.jpg" width="930px" style="margin:0px"></a>
      <h1></h1>
      <img src="img/F13.jpg" width="930px" style="margin:0px"></a>  
      </div>
  <h1></h1>    
  </body>
</html>