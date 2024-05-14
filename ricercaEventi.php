<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Risultato Ricerca</title>
  </head>
  <body>
    <h1>Risultato Ricerca</h1>
    <?php
		$serverName = "localhost";
		$IPserver = "127.0.1";
		$username = "applicazioneWeb";
		$password = "123456_Web&&";
		$db = "listaeventi";

		// Stabilisce la connessione al DBMS remoto
		$connessione = mysqli_connect($serverName, $username, $password, $db);

		// Verifica la connessione
		if (!$connessione) { die("Errore connessione");	}

    // Costruzione della query SQL di ricerca
		$istruzioneSQL = "SELECT * FROM eventi WHERE (";
		$istruzioneSQL .= "titolo LIKE '%".$_POST['titoloEvento']."%'";
		$istruzioneSQL .= " AND localita LIKE '%".$_POST['loc']."%'";
		
		if(isset($_POST['r1'])) 
			$istruzioneSQL .= " AND tipo LIKE '".$_POST['r1']."'";
		
		if(isset($_POST['r3'])) 
			$istruzioneSQL .= " AND accesso LIKE '%".$_POST['r3']."%'";

		$istruzioneSQL .= ");";

		$risultato = mysqli_query($connessione,$istruzioneSQL);

		echo("<p>".$istruzioneSQL."</p>");

    // Visualizzazione del risultato della query
		if (mysqli_num_rows($risultato) > 0) 
		{
			echo("<ul>");
			// output data of each row
			while($riga = mysqli_fetch_assoc($risultato)) 
			{
			echo "<li>id: " . $riga["id"]. " - Titolo: " . $riga["titolo"]. " - Descrizione: " . $riga["descrizione"] . " - Latitudine: " . $riga["lat"] ."</li>";
			}
			echo("</ul>");
		} 
		else 
			{ echo "Nessun risultato"; }

		mysqli_close($connessione);
    ?> 	
  
  </body>
</html>
