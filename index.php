<!DOCTYPE html>
<html>
<head>
	<title>Projeto PWEB-TEIN</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<form id="form">
		<input id="nome" type="text" name="nome" placeholder="Nome"><br><br>
		<input id="idade" type="number" name="idade" placeholder="Idade"><br>
		<input type="text" name="peso" placeholder="Peso"><br>
		<input type="text" name="altura" placeholder="Altura"><br>
		<input type="text" name="altura" placeholder="Curso">
		<p>Facilidade com questões de lógica</p>
		<input type="checkbox" name="checkbox-baixo"> Baixo<br>
		<input type="checkbox" name="checkbox-medio"> Médio<br>
		<input type= "checkbox" name="checkbox-alto"> Alto<br>
		<p>Frequência cardíaca</p>
		<input type="text" name="frequencia-cardiaca" placeholder="Frequência cardíaca">
		<br>
		<br>
		<input type="submit">
	</form>
</body>

<script>
	$("form").submit(function(event){
		event.preventDefault();

		var nome = $("#nome").val();
		var idade = $("#idade").val();
		var peso = $("#peso").val();

		alert("lucas");
	});
</script>

</html>
