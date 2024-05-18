<?php
$status_error = "ERROR";
$status_done = "DONE";
$res = ['status'=>$status_error, 'mess'=>"Не один запрос не сработал!"];

if(isset($_POST['email_to_factory'])){
    $email_to_factory = $_POST['email_to_factory'];
    $fio_user = $_POST['fio_user'];
    $email_user = $_POST['email_user'];
    $phone_user = $_POST['phone_user'];
    $message_user = $_POST['message_user'] . '<br>Моя почта: ' .$email_user . '<br>Мой номер телефона ' .$phone_user;
    $subject = "Заявка на трудоустройство от " .$fio_user;
    
    $subject="=?utf-8?B?".base64_encode($subject)."?=";
	$headers="From: $email_user\r\nReply-to:$email_user\r\nContent-type:text/html;charset=utf-8\r\n";
	if(mail($email_to_factory, $subject, $message_user, $headers)){
		$res['mess']="Сообщение отправлено!";
		$res['status']=$status_done;
    }else {
		$res['mess']="Сообщение не оправлено! Повторите попытку.";
		$res['status']=$status_error;
    }
}

if(isset($_POST['feedback'])){
    $feedback = $_POST['feedback'];
    $fio_user = $_POST['fio_user'];
    $email_user = $_POST['email_user'];
    $phone_user = $_POST['phone_user'];
    $message_user = $_POST['message_user'] . '<br>Моя почта: ' .$email_user . '<br>Мой номер телефона ' .$phone_user;
    $subject = "Сообщение с Сайта от " .$fio_user;
    
    $subject="=?utf-8?B?".base64_encode($subject)."?=";
	$headers="From: $email_user\r\nReply-to:$email_user\r\nContent-type:text/html;charset=utf-8\r\n";
	if(mail($feedback, $subject, $message_user, $headers)){
		$res['mess']="Сообщение отправлено!";
		$res['status']=$status_done;
    }else {
		$res['mess']="Сообщение не оправлено! Повторите попытку.";
		$res['status']=$status_error;
    }
}

echo json_encode($res);