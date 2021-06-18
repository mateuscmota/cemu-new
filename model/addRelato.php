<?php include '../class/classDatabase.php'; ?>

<?php
	$db = new Database();
	$db = $db->conectar();


	$nome = $_POST['nome'];
	$titulo = $_POST['titulo'];
	$qntPessoas = $_POST['qntPessoas'];
	$tempoAtendimento = $_POST['tempoAtendimento'];
	$texto = $_POST['texto'];
	$fk_id_upa = $_POST['fk_id_upa'];

	if(isset($nome) && isset($titulo) && isset($qntPessoas) && isset($tempoAtendimento) && isset($texto)){
		if($db->query("INSERT INTO RELATO(titulo, nome, texto, quantidade_pessoas, tempo_espera, fk_id_upa) VALUES('$titulo', '$nome', '$texto', '$qntPessoas', '$tempoAtendimento', '$fk_id_upa')") ){
				header("Location: ../upa.php?id=". $fk_id_upa);
			} else{
				echo $db->error;
			}
	} else{
		echo 'problemas com input de dados';
	}

?>