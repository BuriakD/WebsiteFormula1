<?php require "db.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>F1</title>
    <link rel="stylesheet" href="css\style.css";>
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
          <li><a href="News.php">Новини F1</a></li>
          <li><a href="Photo.php">Фотографії F1</a></li>
		 <li><a href="About.php">Про сайт</a></li>
       </ul>
</nav>  
	 </div>
	 </div>
	 <h2 style="font-size: 50px">Хельмут Марко: В Red Bull немає місця для Феттеля</h2>	 
	  </header>
      <div class="container">
	  <p class="fir">В кінці 2020 Себастьян Феттель піде з Ferrari, і поки у чотириразового чемпіона світу немає очевидних варіантів продовження кар'єри. Консультант концерну Red Bull з автоспорту Хельмут Марко розповів, що в команді розглядали можливість запрошення Себастьяна Феттеля в 2021 році, але не змогли запропонувати йому контракт.

    </p>
    <img src="img\news1.png" style="margin:0px 25px" ></a>
    <p class="fir">«Я спілкувався з Себастьяном, - розповів Марко в ефірі німецького Sky Sport. - Ми розглянули всі можливі варіанти в Red Bull Racing, але, на жаль, їх не було. Вважаю, Себастьян продовжить кар'єру, якщо отримає місце в команді, здатної перемагати. Буде шкода, якщо він завершить кар'єру, але це кращий варіант для Феттеля, якщо він не отримає місце за кермом швидкої машини.
 
    </p>
    <p class="fir">Себастьян - чотириразовий чемпіон світу. Він багато чого добився в спорті, і у нього вирішене фінансове питання. Завершення кар'єри замість переходу в команду середини пелотону буде в характері і стилі Себастьяна. Однак якщо він перейде в Mercedes, то це стане сенсацією ».

    </p>

      </div>
  <h1></h1>     
</body>
</html>