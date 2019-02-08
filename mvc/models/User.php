<?php
session_start();

class User
{
    public static function register($name, $login, $password, $age, $description)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO users (name, login, password,age,about) '
            . 'VALUES (:name, :login, :password,:age,:description)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':age', $age, PDO::PARAM_STR);
        $result->bindParam(':description', $description, PDO::PARAM_STR);



        return $result->execute();

    }


    public static function checkAuthLogin($login2)
    {
        $db = Db::getConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE login = ?');
        $stmt->execute([$login2]);
        $record = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($record) {
            return true;
        } else {
            return false;
        }
    }

    public static function checkAuthPassword($password2)
    {
        $db = Db::getConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE password = ?');
        $stmt->execute([$password2]);
        $record = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($record)) {
            $hash = $record['password'];
            if (password_verify($_POST['password'], $hash)) {
                return true;
            }
            return false;
        }
    }


    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkAge($age)
    {
        if (is_numeric($age)) {
            return true;
        }
        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) >= 4) {
            return true;
        }
        return false;
    }

    public static function checkLogin($login)
    {
        if (strlen($login) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkLoginExists($login)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM users WHERE login = :login';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()) {
            return true;
        }
        return false;
    }


    public static function checkFile($files)
    {
        $tmp_name = $files['photo']['tmp_name'];
        $type = $files['photo']['type'];
        if (substr($type, 0, 5) !== 'image') {
            return false;
        }
        return true;

    }

    public static function checkFileSize($files)
    {
        $tmp_name = $files['photo']['tmp_name'];
        if (filesize($tmp_name) > 1 * 1024 ** 2) {
            return false;
        }
        return true;
    }

    public static function downloadFiles($id, $files)
    {

        $db = Db::getConnection();
        $files = $files['photo']['name'];
        $db = Db::getConnection();

        $sql = 'INSERT INTO files (user_id, photo) '
            . 'VALUES (:id,:files)';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->bindParam(':files', $files, PDO::PARAM_STR);

        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, __DIR__ . '/../template/images/' . $files);

        return $result->execute();


    }

    public static function getUserItemByID($id)
    {
        $id = intval($id);
        $db = Db::getConnection();
        if ($id) {

            $result = $db->query('SELECT * FROM users WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $userItem = $result->fetch();

            return $userItem;
        }
    }

    public static function getUserItemFileByID($id)
    {
        $id = intval($id);
        $db = Db::getConnection();
        if ($id) {

            $stmt = $db->prepare('SELECT photo FROM files WHERE user_id = ?');
            $stmt->execute([$id]);
            $filesItem = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $filesItem;

        }
    }

    public static function getUserList()
    {

        $db = Db::getConnection();
        $userList = array();
        if (isset($_GET['order'])) {
            if ($_GET['order'] == 'ASC') {
                $result = $db->query('SELECT * FROM users ORDER BY age ASC LIMIT 100');
            } elseif ($_GET['order'] == 'DESC') {
                $result = $db->query('SELECT * FROM users ORDER BY age DESC LIMIT 100');
            }
        } else {
            $result = $db->query('SELECT * FROM users ORDER BY age DESC LIMIT 100');
        }


        $i = 0;
        while ($row = $result->fetch()) {

            $userList[$i]['id'] = $row['id'];
            $userList[$i]['name'] = $row['name'];
            $userList[$i]['age'] = $row['age'];
            $userList[$i]['about'] = $row['about'];
            $userList[$i]['photo'] = $row['photo'];
            $userList[$i]['password'] = $row['password'];
            $i++;
        }

        return $userList;

    }

}