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
    <link href="starter-template.css" rel="stylesheet">


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
                <li><a href="index.php">Авторизация</a></li>
                <li class="active"><a href="reg.php">Регистрация</a></li>
                <li><a href="list.php">Список пользователей</a></li>
                <li><a href="filelist.php">Список файлов</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="form-container">
        <form class="form-horizontal" id="registration-form" enctype="multipart/form-data" action="javascript:void(0);" onsubmit="submitRegistration()">

            <div class="form-group">

                <label for="registration-login" class="col-sm-2 control-label">Логин</label>
                <div class="col-sm-10">
                    <div class="message-new"><div id="message"></div></div>
                    <div class="message-new"><div id="message2"></div></div>
                    <input name="login" class="form-control" id="registration-login" placeholder="Логин" required>
                </div>
            </div>
            <div class="form-group">
                <label for="registration-password" class="col-sm-2 control-label">Пароль</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="registration-password" placeholder="Пароль" required>
                </div>
            </div>
            <div class="form-group">
                <label for="registration-password-repeat" class="col-sm-2 control-label">Пароль (Повтор)</label>
                <div class="col-sm-10">
                    <input name="password-repeat" type="password" class="form-control" id="registration-password-repeat" placeholder="Пароль (Повтор)" required>
                </div>
            </div>
            <div class="form-group">
                <label for="registration-name" class="col-sm-2 control-label">Имя</label>
                <div class="col-sm-10">
                    <input name="name" class="form-control" id="registration-name" placeholder="Имя" required>
                </div>
            </div>
            <div class="form-group">
                <label for="registration-age" class="col-sm-2 control-label">Дата рождения</label>
                <div class="col-sm-10">
                    <input name="age" class="form-control" id="registration-age" placeholder="Дата рождения">
                </div>
            </div>
            <div class="form-group">
                <label for="registration-description" class="col-sm-2 control-label">Описание</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="registration-description" placeholder="О себе"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="registration-photo" class="col-sm-2 control-label">Фото</label>
                <div class="col-sm-10">
                    <input name="photo" type="file" id="registration-photo" class="form-control" placeholder="Загрузить фото">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button class="btn btn-default">Зарегистрироваться</button>
                    <br><br>
                    Зарегистрированы? <a href="index.php">Авторизируйтесь</a>
                </div>
            </div>
        </form>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
