<?php
    include_once('config.php');
    include_once('conexao.php');
    
    $ret = query("kanji","where simbolo = '闇'","simbolo");
    if($ret)
        printf("Valor já inserido");
    else
        printf("Valor disponível");
?>