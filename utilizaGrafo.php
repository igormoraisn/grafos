
<?php
header ('Content-type: text/html; charset=UTF-8');
	include 'grafo.php';
	include 'res.php';
	date_default_timezone_set('America/Maceio');
	#$arq = fopen("disciplinas.txt", "r");
	$arquivo = file('docs/disciplinas.txt', FILE_IGNORE_NEW_LINES);
	$vetor = array();
	$tamanho = intval($arquivo[0]);
	$grafo = new Grafo($tamanho);
	$i = 1;	
	while($i <= $tamanho){
		$vetor = $arquivo[$i];
		$parte = explode(";", $vetor);
		$grafo->adicionaInformacoes($parte[2], $parte[1], $parte[0]);
		$i = $i + 1;	
	}
	$requisitos = intval($arquivo[$i]);
	$anterior = $i;
	for($i=$anterior+1;$i<=$requisitos+$anterior;$i++){
		$linha = utf8_decode($arquivo[$i]);
		$linha = mb_convert_encoding($linha, "UTF-8", "ASCII");
		$vet = explode(";", $linha);
		$length = count($vet);
		$destino = $grafo->retornaIndice($vet[0]);
		for($j=1;$j<$length;$j++){
			$fonte = $grafo->retornaIndice($vet[$j]);
			$grafo->adicionaAresta($fonte, $destino);
			#echo "<br>";
		}
	}
	#$grafo->visualizaGrafo();
	$retorno = array();
	$retorno = $grafo->ordenacaoTopologica();
	$tam = count($retorno);
	#print_r($retorno);
	if($tam != 0){
		imprimePagina($grafo, $tam, $retorno);
		#for($i=0;$i<$tam;$i++){
		#	echo $retorno[$i][0]." ".$retorno[$i][1];
		#	echo "<br>";
		#}
	}
	else {
		imprimePagina($grafo, 0);
		echo "Perfect!";
	}
?>
