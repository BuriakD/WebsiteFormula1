`````<?php
require "db.php";

 $data =$_POST;
 if ( isset($data['go_signup']) )
 {
 $errors = array();
  if( trim($data['login']) == '' )
{
   $errors[] = 'Ведіть логін!' ;
}
  if( trim($data['email']) == '' )
{
   $errors[] = 'Ведіть email!' ;
}
  if( $data['password'] == '' )
{
   $errors[] = 'Ведіть пароль!' ;
}
  if( $data['password_2'] != $data['password'] )
{
    $errors[] = 'Повторний пароль ведений не вірно!';
}
  if( $data['password_2'] == '' )
{
   $errors[] = 'Ведіть повторний пароль!' ;
}
  if( R::count('users', 'login = ? ', array($data['login'])) > 0 )
{
   $errors[] = 'Користувач з таким логіном вже існує!' ;
}
  if( R::count('users', 'email = ? ', array($data['email'])) > 0 )
{
   $errors[] = 'Користувач з таким email вже існує!' ;
}
 if( empty($errors) )
{
 $user= R::dispense('users');
 $user->login= $data['login'];
 $user->email= $data['email'];
 $user->password= password_hash($data['password'], PASSWORD_DEFAULT);
 R::store($user);
 echo'<div id=error class="error">Ви успішно зареєструвалися, перейдите на <a style="color: #fff;" href="login.php">сайт</a> і залогінтесь!</div>';
}
else 
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
<form action="signup.php" method="POST">
 
   <p style="margin-top: 40px;">Ваш Логін:</p>
 <input class="input" type="text" name="login" minlength="4">

   <p>Ваш Email:</p>
 <input class="input" type="text" name="email">

   <p>Ваш Пароль:</p>
 <input class="input" type="password" name="password" minlength="6">

   <p>Ведіть ваш пароль ще раз:</p>
 <input class="input" type="password" name="password_2" minlength="6">

<h1></h1>
 <button class="button" type="submit" name="go_signup">Зареєструватися</button>
</form>
</form>
</div>
</header>
</body>
</html>
