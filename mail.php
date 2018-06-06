<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) php-team@yaochufa <php-team@yaochufa.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

include 'PHPMailer\src\PHPMailer.php';
// require 'PHPMailer\src\SMTP.php';

//自带的mail函数由于没有配置SMTP，使用失败
//$header = "From PHP mail";
//$message = "This is from PHP script mail.\n hello world.\n";
//
//mail("zhongsiyong@yaochufa.com","first mail from PHP mail",$message,$header);

$mail = new PHPMailer();

$mail->CharSet = 'UTF-8';
$mail->IsSMTP();
$mail->SMTPAuth   = true;
$mail->SMTPSecure = 'ssl';
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 465;
$mail->Username   = 'zhongtuo18@gmail.com';
$mail->Password   = 'password';
//$mail->SetFrom('zhongtuo18@gmail.com', 'sion');
$mail->Subject = 'first send by PHPMailer';
$mail->AltBody = '';
$mail->MsgHTML('Hello world!From PHPMailer!');
$mail->AddAddress('zhongsiyong@yaochufa.com', 'zhongsiyong');

if ($mail->Send()) {
    echo '成功发送邮件！';
} else {
    echo "ooh!I'm sorry,failed send:" . $mail->ErrorInfo;
}
