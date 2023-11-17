<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailClassLlamada
{
  private $host = 'smtp.serviciodecorreo.es';
  private $userName = 'formulariosweb@termoelectra.com';
  private $password = 'rqv_Dwlw38';
  private $smtpSecure = 'ssl';
  private $port = 465;
  private $charset = 'UTF-8';
  private $configMail;

  public function __construct()
  {
    $this->configMail = new PHPMailer(true);
    $this->configMail->isSMTP();
    $this->configMail->SMTPDebug  = 0;
    $this->configMail->SMTPAuth   = true;
    $this->configMail->Host       = $this->host;
    $this->configMail->Username   = $this->userName;
    $this->configMail->Password   = $this->password;
    $this->configMail->SMTPSecure = $this->smtpSecure;
    $this->configMail->Port       = $this->port;
    $this->configMail->CharSet    = $this->charset;
    $this->configMail->isHTML(true);
    $this->configMail->setFrom('formulariosweb@termoelectra.com', 'Consulta la WEB termoelectra.com');
    $this->configMail->AddAddress('info@termoelectra.com');
  }



  public function contacto($data)
  {
    try {
      $this->configMail->Subject = "CONTACTO DEL CLIENTE: " . $data['name'] . " ( " . $data['phone'] . " ) -  https://www.termoelectra.com/";
      $this->configMail->Body    =
        "	
      <html>
        <head>
          <title>HTML</title>
        </head>
        <body>
          <a href='https://www.termoelectra.com/'>
          <img src='https://www.termoelectra.com/public/img/LOGO-TERMOELECTRA.webp' alt='logo' title='logo'>
          </a>
          <h1>El siguiente cliente ha realizado un contacto:</h1>
          <p> </p>

          <h2>WEB: https://www.termoelectra.es/</h2>
          <p> </p>	  
          <p><strong>Nombre Cliente: </strong>" . $data['name'] . "</p>
          <p><strong>Teléfono: </strong>" . $data['phone'] . "</p>
          <p></p>
          <p><strong>Aceptada Políticas de Privacidad.</strong></p>

        </body>
      </html>
      ";
      $this->configMail->send();
      return true;
    } catch (Exception $e) {
      return false;
    }
  }
}
