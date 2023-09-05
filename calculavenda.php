<?php

$prod = $_GET['prod']; //Variável Global GET
$prec = $_GET['prec'];
$qtd = $_GET['qtd'];

echo "Produto Selecionado: $prod <br>";
echo "Valor Unitário: $prec <br>";
echo "Quantidade: $qtd <br>";
echo "Valor total da venda R$ ".$prec * $qtd; 