<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php require 'menu.php'; ?>
		<form method="post" action="procurado_insert.php">
			<fieldset>
				<legend>Cadastro de Procurado</legend>
				<p>
					<input type="text" name="cpf" placeholder="Cadastro de Pessoa Física" autocomplete="off" />
				</p>
				<p>
					<input type="text" name="nome" placeholder="Nome" autocomplete="off" />
				</p>
				<p>
					<input type="submit" value="Confirmar" />
				</p>
			</fieldset>
		</form>
	</body>
</html>