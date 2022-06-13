
<?php require "db.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>F1</title>
    <link rel="stylesheet" href="css/style.css">
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
          <li><a href="Photo.php">Фотографії F1</a></li>
		 <li><a href="About.php">Про сайт</a></li>
       </ul>
</nav>     
	 </div>
	 </div>
	 <h2>Вітаю</h2>	 
	  </header>
      <div class="container">
      <p class="fir">«Формула-1» (англ. Formula One) - вищий клас гонок на автомобілях з відкритими колесами, санкціонований Міжнародною автомобільною федерацією (FIA).</p>
	  <p class="fir">Слово «формула» в назві означає набір правил, яким повинні відповідати автомобілі всіх учасників. Чемпіонат світу «Формули-1» проводиться з 1950 року. Турнір знаходиться під управлінням Міжнародної автомобільної федерації FIA, відповідальної за просування на даний момент є група компаній Formula One Group. Чемпіонат світу проводиться щороку і складається з окремих етапів (мають статус Гран-прі). В кінці року виявляється переможець чемпіонату. У Формулі-1 змагаються як окремі пілоти, так і команди. Пілоти змагаються за титул чемпіона світу, а команди - за Кубок конструкторів.
    </p>
    <p class="fir">Техніка учасників повинна відповідати технічному регламенту «Формули-1» і пройти тест на ударостійкість. Команди, що беруть участь в гонках «Формули-1», використовують на Гран-прі боліди (гоночні автомобілі) власного виробництва. Таким чином, завданням команди є не тільки найняти швидкого і досвідченого пілота і забезпечити грамотну настройку і обслуговування машини, але і взагалі самостійно спроектувати і сконструювати болід.
    </p>
      <h3>Хочеш дізнатися про F1 більше?</h3>
      <h3>Тоді подивись відео!</h3>
    <center>  
    <iframe width="560" height="315" src="https://www.youtube.com/embed/pmXlnU_KKZU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </center>
      <h3>Фотографії F1</h3>
      <img src="img/F1.jpg" width="270px" style="margin:0px 18px"></a>
      <img src="img/F4.jpg" width="270px" style="margin:0px 18px"></a>
      <img src="img/F3.jpg" width="270px" style="margin:0px 18px"></a>   
      </div>
  <h1></h1>     
</body>
</html>
