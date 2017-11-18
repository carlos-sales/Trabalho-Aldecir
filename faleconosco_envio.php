<?php

    extract( $_POST );
    
    $cTextoCorpo = '<b>Contato: </b>' . $nome . '<br />
                    <b>E-mail: </b>' . $email . '<br /> 
                    <b>Telefone: </b>' . $telefone . '<br /> 
                    <b>Assunto: </b>' . $assunto . '<br /> 
                    <b>Mensagem: </b>' . $mensagem;

    //
    
    require_once 'PHPMailer/PHPMailerAutoload.php';
    require_once 'PHPMailer/class.phpmailer.php';
    
    //
    
    $mail = new PHPMailer();
    
    $mail->CharSet      = "UTF-8";
    $mail->SMTPAuth     = true;  // Ativa o SMTP autenticado
    $mail->SMTPSecure   = 'ssl'; // Tipo de segurança
    $mail->Host         = 'ssl://smtp.googlemail.com';
    $mail->Port         = 465;
    $mail->Username     = 'seuemail@gmail.com'; // E-mail para autenticação
    $mail->Password     = 'sua senha';
    $mail->From         = $email; // E-mail do Remetente
    $mail->FromName     = $nome;
    $mail->addAddress('e-mail do destinátario'); // E-mail do destinatário
    $mail->isHTML( true );
    
    $mail->Subject      = $assunto;      // Assunto
    $mail->Body         = $cTextoCorpo;  // Texto da mensagem HTML
    $mail->AltBody      = $cTextoCorpo;  // Texto da mensagem em formato texto
    
    if ( $mail->send() ){
        header( 'Location: principal.php?pagina=faleconosco&result=sucesso' );
    } else {
        header( 'Location: principal.php?pagina=faleconosco&result=erro&msg='.$mail->ErrorInfo );
    }
   
