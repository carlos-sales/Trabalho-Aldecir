+<?php
 +
 +    extract( $_POST );
 +    
 +    $cTextoCorpo = '<b>Contato: </b>' . $nome . '<br />
 +                    <b>E-mail: </b>' . $email . '<br /> 
 +                    <b>Telefone: </b>' . $telefone . '<br /> 
 +                    <b>Assunto: </b>' . $assunto . '<br /> 
 +                    <b>Mensagem: </b>' . $mensagem;
 +
 +    //
 +    
 +    require_once 'PHPMailer/PHPMailerAutoload.php';
 +    require_once 'PHPMailer/class.phpmailer.php';
 +    
 +    //
 +    
 +    $mail = new PHPMailer();
 +    
 +    $mail->CharSet      = "UTF-8";
 +    $mail->SMTPAuth     = true;  // Ativa o SMTP autenticado
 +    $mail->SMTPSecure   = 'ssl'; // Tipo de segurança
 +    $mail->Host         = 'ssl://smtp.googlemail.com';
 +    $mail->Port         = 465;
 +    $mail->Username     = 'meu email'; // E-mail para autenticação
 +    $mail->Password     = 'minha senha';
 +    $mail->From         = $email; // E-mail do Remetente
 +    $mail->FromName     = $nome;
 +    $mail->addAddress('kiabbo.salles@gmail.com'); // E-mail do destinatário
 +    $mail->isHTML( true );
 +    
 +    $mail->Subject      = $assunto;      // Assunto
 +    $mail->Body         = $cTextoCorpo;  // Texto da mensagem HTML
 +    $mail->AltBody      = $cTextoCorpo;  // Texto da mensagem em formato texto
 +    
 +    if ( $mail->send() ){
 +       	header( 'Location: index.php?pagina=faleconosco&result=sucesso' );
 +        //header( 'Location: index.php' );
 +    } else {
 +        header( 'Location: index.php?pagina=faleconosco&result=erro&msg='.$mail->ErrorInfo );
 +        //header( 'Location: faleconosco.php' );
 +    }
 +
 +?>
