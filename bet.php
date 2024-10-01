<?php 

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if($idade >= 18){
    echo "Liberado";
    header(header: "Location: jogo.html");
}else{
    echo "Volte quando tiver 18 anos ou mais!";
}