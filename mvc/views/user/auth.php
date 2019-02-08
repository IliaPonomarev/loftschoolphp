<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['access'])) {
    $_SESSION['access'] = 'error';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/template/css/style.css?=v1" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container"><a href="/">←Назад</a>

    <?php
    if ($_SESSION['access'] == 'granted') {

        echo '<h1>Вы авторизованы</h1>';
        echo '<a href="/users/logout">Выйти</a> <br>';

    } else {
        echo '

      <div class="form-container">
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label for="authorization-login" >Логин</label>
            <input type="text"  name="login2" id="authorization-login" placeholder="Логин">
          </div>
          <div class="form-group">
            <label for="authorization-password" >Пароль</label>
            <input type="password"  name="password2" id="authorization-password" placeholder="Пароль">
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-default" name="submit2" value="Войти"></input>
              <br><br>
              Нет аккаунта? <a href="register">Зарегистрируйтесь</a>
          </div>
        </form>
      </div>
    ';
        if (isset($errors)) {
            echo "<p class='error'>$errors</p>";
        }
    }
    ?>
</div>
</body>
</html>
