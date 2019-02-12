<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Project name</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li><a href="index.php" class="active">Авторизация</a></li>
                  <li><a href="reg.php">Регистрация</a></li>
                  <li><a href="list.php">Список пользователей</a></li>
                  <li><a href="filelist.php">Список файлов</a></li>
                  <li><a href="admin/index.php" id="message">АДМИНКА</a></li>
              </ul>
          </div><!--/.nav-collapse -->
      </div>
  </nav>
  <?php
  if ($_SESSION['access'] == 'granted'){
      echo '<h1>Вы авторизованы</h1>';
      echo '<a href="php/logout.php">Выйти</a>';
  } else{
      echo '<div class="container">
      <div class="form-container">
        <form class="form-horizontal" action="javascript:void(0);" onsubmit="authorization()">
          <div class="form-group">
            <label for="authorization-login" class="col-sm-2 control-label">Логин</label>
            <div class="col-sm-10">
            <div class="message-new"><div id="message"></div></div>
                    <div class="message-new"><div id="message2"></div></div>
              <input type="text" class="form-control" name="login" id="authorization-login" placeholder="Логин">
            </div>
          </div>
          <div class="form-group">
            <label for="authorization-password" class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="authorization-password" placeholder="Пароль">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Войти</button>
              <br><br>
              Нет аккаунта? <a href="reg.php">Зарегистрируйтесь</a>
            </div>
          </div>
        </form>
      </div>

    </div>';
  }
  ?>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>