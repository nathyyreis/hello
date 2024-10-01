<?php

$numero = $_POST['numero'];

$numero_da_sorte = $numero + 1;

echo "Numero indormado: ", $numero; 
echo "<br>";
echo "Ops! Quase acertou!"; 
echo "<br>";
echo "Numero sorteado: ", $numero_da_sorte;
