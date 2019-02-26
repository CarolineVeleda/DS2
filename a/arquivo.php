

<?php

$cod=$_POST["cod"];
$nome=$_POST["nome"];
$quant=$_POST["quant"];
$preco=$_POST["preco"];



$filepath = "/home/aluno/Área de Trabalho/exe1";
	$filename = $filepath."/teste.txt";
	$mode = "a+";
	

	
	//echo "<br />";

	$arquivo = fopen($filename,$mode);
    $quebra="\n";

	if (file_exists($arquivo)) {
		echo "arquivo existente";
	} else {
		echo "arquivo não existente";
	}
	
	//(explode(" ",$str));

	if ($arquivo) {
		if (fwrite($arquivo,($cod.';'.$nome.';'.$quant.';'.$preco.$quebra))) {
			echo "<br />escrita realizada com sucesso<br />";
			fclose($arquivo);				
		}
		else{
			echo 'error';
		}
	}
	

//explode-array

/*
2) - Criar um menu para abrir o arquivo e listar todos os dados e apresentar:

a) - o produto de maior preço
b) o produto de maior quantidade
c) o o produto de maior quantidade final.
*/

?>