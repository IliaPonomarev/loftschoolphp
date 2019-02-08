<?php

include_once ROOT . '/models/User.php';

class UserController
{


    public function actionRegister()
    {

        $name = '';
        $login = '';
        $password = '';
        $age = '';
        $description = '';
        $result = false;
        if (isset($_POST['submit'])) {
            $name = strip_tags(trim($_POST['name']));
            $login = strip_tags(trim($_POST['login']));
            $password = password_hash(strip_tags(trim($_POST['password'])), PASSWORD_DEFAULT);
            $age = strip_tags(trim($_POST['age']));
            $description = htmlspecialchars(trim($_POST['description']));
            $errors = false;
//            echo '<pre>';
//            var_dump($files);
            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkLogin($login)) {
                $errors[] = 'Login не должeн быть короче 2-х символов';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 4-x символов';
            }

            if (!User::checkAge($age)) {
                $errors[] = 'Возраст должен быть числом';
            }

            if (User::checkLoginExists($login)) {
                $errors[] = 'Такой login уже используется';
            }

            if ($errors == false) {
                $result = User::register($name, $login, $password, $age, $description);
            }

        }


        require_once(ROOT . '/views/user/register.php');

        return true;
    }

    public function actionDownload($id)
    {
        $files = '';
        if (isset($_POST['submit3'])){
            $files = $_FILES;
            $errors = false;

            if (!empty($files['photo']['name'])){
                if (!User::checkFile($files)) {
                    $errors = 'Загруженный файл не является картинкой';
                }
                if (!User::checkFileSize($files)) {
                    $errors = 'Размер файла должен быть не более 2 МБ ';
                }
            }

            if ($errors == false) {
                $result = User::downloadFiles($id,$files);
            }

        }

        if ($id) {
            $userItem = User::getUserItemByID($id);
            require_once (ROOT . '/views/user/download.php');
        }
        return true;
    }

    public function actionAuth()
    {
        $password2 = '';
        $login2 = '';
        $errors = false;
        if (isset($_POST['submit2'])) {
            $password2 = strip_tags(trim($_POST['password2']));
            $login2 = strip_tags(trim($_POST['login2']));

            if (!User::checkAuthLogin($login2) && !User::checkAuthPassword($password2)) {
                $errors = 'Пара логин пароль не найдена';
            }

            if ($errors == false) {
                $_SESSION['access'] = 'granted';
            }


        }
        require_once(ROOT . '/views/user/auth.php');

        return true;
    }

    public function actionLogout()
    {
        require_once(ROOT . '/views/user/logout.php');

        return true;
    }



    public function actionIndex()
    {

        $userList = array();
        $userList = User::getUserList();
        require_once(ROOT . '/views/user/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $userItem = User::getUserItemByID($id);
            $filesItem = User::getUserItemFileByID($id);
//            echo '<pre>';
//            var_dump($filesItem);
            require_once(ROOT . '/views/user/view.php');

        }

        return true;

    }

}