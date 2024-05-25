<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Cancellazione</title>
  </head>
  <body>
    <h1>Cancellazione</h1>
    <?php
		$serverName = "localhost";
		$IPserver = "127.0.1";
		$username = "applicazioneWeb";
		$password = "123456_Web&&";
		$db = "listaeventi";

		// Stabilisce la connessione al DBMS remoto
		$connessione = mysqli_connect($serverName, $username, $password, $db);

		// Check connection
		if (!$connessione) { die("Errore connessione");	}

		$istruzioneSQL = "DELETE FROM eventi WHERE ";
		$istruzioneSQL .= "id = ".$_GET['id'].";";
		$istruzioneSQL = mysqli_prepare($connessione,"DELETE FROM eventi (id) WHERE (?)");
	
		// Esecuzione della query
		mysqli_stmt_bind_param($istruzioneSQL, "i", $id,);
		mysqli_stmt_execute($istruzioneSQL);
		echo("<p>".$istruzioneSQL."</p>");
		
		mysqli_query($connessione,$istruzioneSQL);

		mysqli_close($connessione);
    ?> 	
	<a href="./">Home comandi</a>
  </body>
</html>
