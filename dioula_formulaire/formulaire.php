<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>

label {
	display: inline-block;
	float: left;
	width: 20%;
	margin-top: 5%;



}


input[type=text], select {
	width: 80%;
	padding: 12px 5px;
	display: inline-block;
	float: right;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-left: 20%;
	margin-top: -3%;
}

input[type=submit] {
	width: 40%;
	background-color: #4CAF50;
	color: white;
	padding: 12px 2px;
	margin: 8px 0px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #45a049;
}

div {
	width: 60%;
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
}
</style>
<body>
	<center>
		
		<p style="color: #4CAF50;"> Veuillez renseigner les informations suivantes </p>

		<div>
			<form method="POST" action="traitement.php">
				<fieldset>
					<legend>Vos informations</legend>
					<p><label> Nom :</label><input type="text" name="nom" required></p>
					<p><label> Prenom :</label><input type="text" name="prenom" required></p>
					<p><label> Adresse :</label><input type="text" name="adresse" required></p>
					<p><label> Ville :</label><input type="text" name="ville" required></p>
					<p><label> Code Postal :</label><input type="text" name="code" required></p>
					<p><center><input type="submit" id="save" name="envoi"></center></p>
				</fieldset>

			</form>

		</div>

	</center>
</body>
</html>