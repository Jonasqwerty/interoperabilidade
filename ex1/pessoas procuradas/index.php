<?php
	$create = "create table if not exists procurado ( id integer primary key autoincrement, cpf text, nome text, desde datetime ); ";
	$conexao = new pdo ('sqlite:bancodedados.data');
	$conexao->exec($create);
	unset($conexao);
	header('Location:/procurado_lista.php');
?>