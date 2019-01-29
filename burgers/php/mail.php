<?php
require_once __DIR__ . "/../vendor/autoload.php";
require_once "../config/config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$remoteIp = $_SERVER['REMOTE_ADDR'];
$gRecaptchaResponse = $_REQUEST['g-recaptcha-response'];
$recaptcha = new \ReCaptcha\ReCaptcha("6LcqnI0UAAAAANlp4X1qf6iKZxxy-mbMdlUgEF0B");
$resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);

if ($resp->isSuccess()) {
    if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['phone'])) {
        echo "ok";
        $name = strip_tags(trim($_POST["name"]));
        $phone = strip_tags(trim($_POST["phone"]));
        $email = strip_tags(trim($_POST["email"]));
        $street = strip_tags(trim($_POST["street"]));
        $home = strip_tags(trim($_POST["home"]));
        $part = strip_tags(trim($_POST["part"]));
        $appt = strip_tags(trim($_POST["appt"]));
        $floor = strip_tags(trim($_POST["floor"]));
        $comment = htmlspecialchars(trim($_POST["comment"]));
        $payment = strip_tags(trim($_POST["payment"]));
        $payment = strip_tags(trim($_POST["payment"]));
        $callback = strip_tags(trim($_POST["callback"]));

        include 'auth.php';
        include 'order.php';

        $stmt = $db->prepare("SELECT * FROM orders WHERE id_user = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $id_user = $user['id_user'];

        $stmt = $db->prepare("SELECT COUNT(*) FROM orders WHERE id_user = ?");
        $stmt->execute([$id_user]);
        $count = $stmt->fetch(PDO::FETCH_ASSOC)['COUNT(*)'];

        $address = $user['address'];
        $order_id = $user['order_id'];

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'testoviiaddress';                 // SMTP username
            $mail->Password = 'testoviipassword2';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->CharSet = 'UTF-8';
            $mail->setFrom('testoviiaddress@mail.ru');
            $mail->addAddress('seikadi12345@gmail.com');
            $mail->isHTML(true);
            $mail->Subject = "Заказ номер: $order_id";
            $mail->Body = "Ваш заказ будет доставлен по адресу: $address \nТелефон: $phone \nВаш заказ DarkBeefBurger за 500 рублей \nЭто ваш $count заказ ";

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}else {
    echo "neok";
}












