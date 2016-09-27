<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		switch ($_POST['numPost']) {
			case 1:
				Post::uploadArquivo();
        		break;
		}
	}

class Post{
	public static function uploadArquivo(){
		$nome_temporario=$_FILES["arquivo"]["tmp_name"];
		$nome_real=$_FILES["arquivo"]["name"];
		copy($nome_temporario,"docs/disciplinas.txt");
		header('Location: utilizaGrafo.php');
	}
}
?>