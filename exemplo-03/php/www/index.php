<?php

session_start();
$_SESSION['total'] = isset($_SESSION['total']) ? $_SESSION['total'] + 1 : 0;

function randonHexColor() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}

function color() {
    return 'style="color:' . randonHexColor() . '"';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker compose</title>
</head>
<body >

    <h1>Olá amigo, você visitou nossa página <?=$_SESSION['total']?> Vezes</h1>

    <h2>ID da session: <?=session_id()?></h2>

    <h2>Nome do servidor: <span <?=color()?> ><?=gethostname()?></span></h2>

    <h2>IP do servidor: <span <?=color()?> ><?=$_SERVER['SERVER_ADDR']?></span></h2>

    <h2>Versão do PHP: <?=phpversion()?></h2>

    
</body>
</html>