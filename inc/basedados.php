<?php
    $enderecoBD = "localhost";
    $nomeBD = "bdpastelaria";
    $utilizadorBD = "root";
    $passwordBD = "";

    //estabelecer ligação e guardar a mesma
    $ligacaoBD = mysqli_connect($enderecoBD, $utilizadorBD, $passwordBD, $nomeBD) or die("Erro ao ligar à BD!");