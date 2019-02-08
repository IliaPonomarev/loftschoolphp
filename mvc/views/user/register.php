<?php
if (!isset($_SESSION)){
session_start();
}?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/template/css/style.css?=v1" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>

<div class="container">
    <?php if ($result): ?>
        <p class="success">Вы зарегистрированы!</p>
        <?php $_SESSION['access'] = 'granted'?>
    <?php else: ?>
    <?php if (isset($errors) && is_array($errors)): ?>
            <?php $_SESSION['access'] = 'error'?>
        <ol>
            <?php foreach ($errors as $error): ?>
                <li class="error">  <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ol>
    <?php endif; ?><?php endif; ?>
    <a href="/">←Назад</a>
    <h2>Зарегистрируйтесь</h2>
    <form class="form-horizontal" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="registration-login">Логин</label>
            <input name="login"  id="registration-login" placeholder="Логин" required value="<?php if(isset($_POST['login'])) echo $_POST['login']; ?>">
        </div>
        <div class="form-group">
            <label for="registration-password">Пароль</label>
            <input name="password" type="password"  id="registration-password" placeholder="Пароль" required value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>">
        </div>
        <div class="form-group">
            <label for="registration-name">Имя</label>
            <input name="name"  id="registration-name" placeholder="Имя" required value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>">
        </div>
        <div class="form-group">
            <label for="registration-age" >Возраст</label>
            <input name="age"  id="registration-age" placeholder="Возраст" value="<?php if(isset($_POST['age'])) echo $_POST['age'] ?>">
        </div>
        <div class="form-group">
            <label for="registration-description" >Описание</label>
            <textarea name="description"  id="registration-description" placeholder="О себе"><?php if(isset($_POST['description'])) echo $_POST['description'] ?></textarea>
        </div>
<!--        <div class="form-group">-->
<!--            <label for="registration-photo" >Фото</label>-->
<!--            <input name="photo" type="file" id="registration-photo"  placeholder="Загрузить фото">-->
<!--        </div>-->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="submit"></input>
                <br><br>
                Зарегистрированы? <a href="auth">Авторизируйтесь</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>

