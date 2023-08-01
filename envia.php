<?php

$email = addslashes($-post{'email'});

$para = "sabrinapaiva978@gmail.com";
$assusto = "pergutas";

$corpo ="email: ".$email;

$cabeca = "from: sabrina.paiva@escola.pr.gov.br"."\n". "reply-to:" .$email. "\n". "X=mailer:PHP/".phpversio();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!")
}else {
    echo("houve um erro ao enviar o email");
}

?>
