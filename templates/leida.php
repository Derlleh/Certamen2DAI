<!DOCTYPE html>
<html lang="en">

<head>
	<title>Radio VaioVaio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<meta charset="utf-8">
</style>
</head>

<body>


	<div class="container">
		<h2>noleidas</h2>
		<ul>
		{% for nole in noleida %}
			<li>{{ noleida["tituloNoLeida"] }}</li>
		{% endfor%}
		</ul>
	</div>


</body>
	
</html>