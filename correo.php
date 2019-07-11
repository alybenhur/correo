<?php
require "class.phpmailer.php";
include("class.smtp.php");

 $data = $_POST["paquete"];
 $data  = json_decode($data); 
 $usuario = $data->{'usuario'};
        
                  $mail = new PHPMailer;
                  $mail->IsSMTP();
                  $mail->Host = "ssl://smtp.gmail.com:465";
                  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                  $mail->SMTPAuth   = true;                  // enable SMTP authentication
                  $mail->Port       = 465;     
                  $mail->Username   = 'alybenhur@gmail.com'; // SMTP account username
                  $mail->Password   = 'alybenhur@1234';        // SMTP account password
                  $mail->AddAddress($usuario, $usuario);
                  $mail->SetFrom('alybenhur@gmail.com', 'aly culchac');
                  $mail->Subject = 'Bienvenido a Piggy Bag';
                  $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
                  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
                  $mensaje = "<html><body>
                  <center><h1>Bienvenido a Piggy Bag.</h1></center><br><br>
                  Para la activación de su cuenta Piggy debe hacer click en el link : <a href='http://186.43.32.120/piggy_bag/activate/activate.html?user=$password'<br>
                  <br>
                  Contributor
                  </body></html>";
                  
                  $mail->Body = $mensaje;
                   'Para la activación de su cuenta Peggy Bag haz click en el siguiente link :';
                  $mail->IsHTML(true);  
                  $mail->Send();
?>
