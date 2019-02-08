<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/template/css/style.css?=v2" rel="stylesheet" type="text/css"/>
</head>
<body>
<!--//<td>{$userItem['photo']}</td>-->
<?php $id = $userItem['id'] ?>
<a href="/users">←Назад</a>
<h1>Профиль</h1>
<table>
    <tr>
        <th>Имя</th>
        <th>Возраст</th>
        <th>Описание</th>

        <!--    --><?php
        if (isset($filesItem['photo'])) {
            $files = $filesItem['photo'];
        } else {
            $files = '1.jpg';
        }

        echo "<tr>
<td>{$userItem['name']}</td>
<td>{$userItem['age']}</td>
<td>{$userItem['about']}</td>

</tr>";

        ?>

</table>
<div class="download"><a href="/users/download/<?= $id ?>">Загрузить фотографии↓</a></div>
<?php
foreach ($filesItem as $value) {
    foreach ($value as $key) {
        echo "<td><img src='../../template/images/$key' alt='' class='photo'></td>";
    }
} ?>
</body>
</html>

