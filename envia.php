<?php 
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);


    $para = "breno.soriani@gmail.com";
    $assunto = "Coleta de Dados - .DEV"


    $corpo = "Nome: ".$nome. "\n"."E-Mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: breno.soriani@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();
    
    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    
    }else{
        echo("Houve um erro ao enviar o Email, Tente novamente mais tarde.");
    }




?>