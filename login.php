<?php
require "db.php";
 $data =$_POST;
 if ( isset($data['go_login']) )
 {
     $errors = array();
     $user = R::findOne('users','login = ?', array($data['login'])); //Проверка логина
     if ($user)
         {   
         if(password_verify ($data['password'], $user->password)) //ПРоверка пароля
           
         { 
            // все хорошо, логиним пользователя
            $_SESSION['logged_user'] = $user;
            header('Location: index.php');
        }else {
         $errors[] = 'Невірний пароль!';
              }
            }
            else {
         $errors[] = 'Користувач с таки логінон не існує!';
             }
        if( !empty($errors) )
    {
    echo'<div id=error class="error">'.array_shift($errors).'</div>';
    }
}
?>
<html>
 <head>
 <link rel="stylesheet" href="css/stylelogin.css">
</head>
 <body> 
   <header>
 <div class="container">
   <form action="login.php" method="POST">
   <p style="margin-top: 80px;">Логін</p>
 <input class="input" type="text" name="login" minlength="4" >
   <p>Пароль</p>
 <input class="input" type="password" name="password" minlength="6">
 <p></p>
 <button class="button" type="submit" name="go_login">Увійти</button>
</form>
</div>
</header>
</body>
</html>