
<?php require "db.php";




$data=$_POST;
$chats= R::dispense('chats');
if (isset($data['text'] ))
$chats ->text= $data['text'];
$chats->user= $_SESSION['logged_user']->login;
$chats->time= date('H:i, d.m.Y');
 if ($chats->text != '' )
       R::store($chats);
?>

<html>
<head>
<link rel="stylesheet" href="css/stylechats1.css">
</head>


<header>
<div class="container">
<nav>
       <ul class="menu">
          <?php if( isset($_SESSION['logged_user'])) : 
            ?>
          <li><a>Вітаю, <?php echo $_SESSION['logged_user']->login; ?></a></li>  
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
</header>
<body>
<div class="container1">
<div class="ChatBox">
<?php
$cha=R::getAll( 'SELECT * FROM chats ORDER By time');
if (count($cha) > 0 ) {
for ($row = 0; $row < count($cha); $row++) {
    
    for ($col = 0; $col < 1; $col++) {
     echo "<div class='ChatBlock'><span>".$cha[$row]["user"].$cha[$row]["time"]."</span>".$cha[$row]["text"]."</div>";
    }
    echo "</ul>";
 }
}
?>
</div>





<form method="POST" action="chat.php">
<textarea maxlength="200"  wrap="hard" class="ChatMessage" name="text" placeholder="Текст повідомлення" required></textarea>
<br><input class="button" type="submit" name="enter" value="Відправити"> <input class="button" type="reset" value="Очистити">
</div>
</form>
</body>
</html>