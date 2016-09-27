<?php
header ('Content-type: text/html; charset=UTF-8');
class Grafo{
	private $matriz;
	private $disciplinas;
	private $vertices;
	private $nivel;
	private $total;
	private $erro;
	protected $_ts   = array();
	public function Grafo($v){
		$this->vertices = $v;
		$this->matriz = array();
		$this->disciplinas = array();
		$this->nivel = array();		
		$this->total = 0;		
		$this->erro = array();
		for($i=0;$i<$v;$i++){
			$this->disciplinas[$i] = "";
			for($j=0;$j<$v;$j++){
				$this->matriz[$i][$j] = 0;		
			}		
		}
	}
	public function adicionaAresta($fonte, $destino){
		$this->matriz[$fonte][$destino] = 1;	
	}
	public function adicionaInformacoes($level, $disciplina){
		$this->nivel[]	= $level;
		$this->disciplinas[$this->total] = $disciplina;
		$this->total++;
	}
	public function visualizaGrafo(){
		for($i=0;$i<$this->vertices;$i++){
			for($j=0;$j<$this->vertices;$j++){
				echo $this->matriz[$i][$j]."\t";	
			}
			echo "<br>";		
		}
	}
	public function retornaIndice($disc){
		for($i=0;$i<$this->vertices;$i++){
			$string = $this->disciplinas[$i];
			if($string == $disc){	
				return $i;		
			}	
		}
	}
public function visita($v, $visitado, $pilha) {
    $visitado[$v] = true;
    for ($i = 0; $i < $this->vertices; $i++){
        if (!$visitado[$i] && $this->matriz[$i][$v] == 1)
            $this->visita($i, $visitado, $pilha);
        	elseif($this->matriz[$i][$v] == 1)
        			$this->erro[] = array($i, $v);
        }
    $pilha->push($v);
}
 
public function ordenacaoTopologica() {
	$pilha = new SplStack();
	$visitado = array();
	for ($i = 0; $i < $this->vertices; $i++)
		$visitado[$i] = false;
	for ($i = 0; $i < $this->vertices; $i++){
		if ($visitado[$i] == false)
			$this->visita($i, $visitado, $pilha);    
	}
	while ($pilha->isEmpty() == false) {
		#echo $pilha->top()." ";
		$pilha->pop();
	}
	return $this->erro;
}
}
?>