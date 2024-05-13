<!DOCTYPE html>
<html lang="it">
	<head>
		<title>Form Inserimento</title>
	</head>
	<body>
		<h1>Form Ricerca Dati</h1>
		<form method="post" action="ricerca-Visualizzazione.php">
			<fieldset>
				<legend>Dati ricerca</legend>
				<label for="titoloEvento"></label>
				<input type="text" name="titoloEvento" id="titoloEvento">
      </fieldset>
      <fieldset>
				<legend>Tipo evento</legend>
				<input type="radio" name="r1" id="r1_1" value="concerto" checked><label for="r1_1">Cocerto</label><br>
				<input type="radio" name="r1" id="r1_2" value="teatro"><label for="r1_2">Teatro</label><br>
				<input type="radio" name="r1" id="r1_3" value="sport"><label for="r1_3">Sport</label>
      </fieldset>
		</form>
	</body>
</html>
