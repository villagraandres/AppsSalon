<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{

    public $email;
    public $nombre;
    public $token;
    public function __construct($email,$nombre,$token)
    {
        $this->email=$email;
        $this->nombre=$nombre;
        $this->token=$token;
    }

    public function enviarConfirmacion(){
        //Crear el objeto de email
        $mail= new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'd98386aff043cd';
        $mail->Password = 'ad9a6874b4b037';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com','AppSalon.com');
        $mail->Subject='Confirmacion de cuenta';

        $mail->isHTML(TRUE);
        $mail->CharSet='UTF-8';
        $contenido="<html>";
        $contenido.="<p><strong>Hola ". $this->nombre. "</strong> has creado tu cuenta solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido.="<p>Presiona aqui: <a href='http://appsalon.test/confirmar-cuenta?token=".$this->token."'>Confirmar cuenta</a> </p>";
        $contenido.="<p>Si tu no solicitaste esta cuenta, ignora el mensaje</p>";
        $contenido.="</html>";
        $mail->Body=$contenido;

        //Enviar
        $mail->send();
   
    }
}