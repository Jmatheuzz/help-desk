<?php
    session_start();
    $arq_chamados = fopen('../../../.././help-desk/chamados.txt', 'a');
    $chamado = $_SESSION['user_id'] . '|' .implode('|', $_POST) . PHP_EOL;
    fwrite($arq_chamados, $chamado);
    fclose($arq_chamados);
    header('Location: abrir_chamado.php');
?>