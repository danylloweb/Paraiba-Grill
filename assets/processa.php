<?php
$form_data = $_POST['form_data'];
$params = array();
parse_str($form_data,$params);

$assunto = "Newsletter PB Grill";
$mensagem = "<h2>{$assunto}</h2>\n";

foreach ($params as $key => $value) {
    $key = ucfirst($key);
    $mensagem .= "{$key}: {$value}\n";
}

$to = "monica@lumenagencia.com.br, joaotdn@lumenagencia.com.br";
$remetente = "Newsletter PB Grill <noreply@pbgrill.com.br>";

$email_headers = implode ( "\n",array ( "From: $remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

if((mail($to, $assunto, nl2br($mensagem), $email_headers))) {
    echo "true";
} else {
    echo "false";
}