/*
La soluzione proposta prevede la progettazione e l'implementazione di un
WS REST lato server che elabora le http-request che i client inviano e che
contengono i dati di interesse.
Il metodo http implementato è il GET
*/
<?php
	header('Content-Type: application/text');
	$data = $_GET['data'];
	$orario = $_GET['orario'];
	$lat = $_GET['lat'];
	$lon = $_GET['lon'];
	$v = $_GET['v'];

	// Connessione al db
	//								              nome del       utente	password	  nome del 
	//								              server DB							            database
	$connessione = mysqli_connect("dbserver.local", "ws", "ws001&&", "datitrasporto");
	
	// Predisposizione della query di inserimento
	$istruzioneSQL = mysqli_prepare($connessione,"INSERT INTO dati (data,orario,lat,lon,v) VALUES (?,?,?,?,?");
	
	// Esecuzione della query
	mysqli_stmt_bind_param($istruzioneSQL, $data, $orario, $lat, $lon, $v);
	mysqli_query($connessione,$istruzioneSQL);
	
	// Chiudere la connessione
	mysqli_close($connessione);
?>
