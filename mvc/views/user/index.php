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

<a href="/">←Назад</a>
<h1>Список пользователей</h1>
<table>
    <tr>
        <th>Имя</th>
        <th>Возраст
            <a href="?order=DESC">↑</a>
            <a href="?order=ASC">↓</a>
        </th>
        <th>Описание</th>
    </tr>

        <?php
        //echo '<pre>';
        ////print_r($filesItem);
        foreach ($userList as $userItem) {
            $id = $userItem['id'];
            if ($userItem['age'] >= 18){
                $userItem['age'] =  $userItem['age'] .' (соврешеннолетний)';
            } else {
                $userItem['age'] =  $userItem['age'] .' (несоврешеннолетний)';
            }
            echo "<tr>
                  <td><a href='/users/view/$id'>{$userItem['name']}</a></td>
                  <td>{$userItem['age']}</td>
                  <td>{$userItem['about']}</td>
              
                    ";

        }
        ?>

</table>
</body>
</html>