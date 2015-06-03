<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	</head>
	<body>
		<div>
			<h2>Desafio de Programação</h2>
			<p>Envie o arquivo padronizado.</p>
		</div>
		<form method="POST" action="upload.php" enctype="multipart/form-data">
			<input name="arquivo" type="file">
			<small>Apenas arquivos com extensão .tab serão aceitos.</small>
			<br><br>
			<input type="submit" value="Enviar">
		</form>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>