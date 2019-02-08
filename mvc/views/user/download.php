<!doctype html>
<html lang="en">
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
    <a href="/users/view/<?= $id ?>">←Назад</a>
    <?php $id = $userItem['id'];
    if (isset($errors)) {
        echo "<p class='error'>$errors</p>";
        if ($errors == false){
            echo "<p class='success'>Файлы загружены</p>";
        }
    }

//    else {
//
//    }
    ?>
    <h2>Загрузите файл</h2>
<form class="form-horizontal" method="post" id="registration-form" enctype="multipart/form-data">
    <div class="form-group">
        <label for="registration-photo" class="col-sm-2 control-label">Фото</label>
        <input name="photo" type="file" id="registration-photo" class="form-control" placeholder="Загрузить фото">
    </div>
    <div class="form-group">
        <input type="submit" name="submit3"></input>
    </div>
</form>
</div>
</body>
</html>