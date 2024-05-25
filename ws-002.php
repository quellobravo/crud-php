<?php
	echo("Elaborazione");
	/*
	La soluzione proposta prevede la progettazione e l'implementazione di un
	WS REST lato server che elabora le http-request che i client inviano e che
	contengono i dati di interesse.
	Il metodo http implementato è il GET
	*/
	$lat = $_GET['lat'];
	$lon = $_GET['lon'];
	$v = $_GET['v'];
	$iddispositivo = $_GET['iddispositivo'];

	// Connessione al db
	//								nome del       utente	password	nome del 
	//								server DB							database
	$connessione = mysqli_connect("127.0.0.1", "ws", "ws001&&", "datitrasporto");
	
	// Predisposizione della query di inserimento
	$istruzioneSQL = mysqli_prepare($connessione,"INSERT INTO dati (lat,lon,v,iddispositivo) VALUES (?,?,?,?)");
	
	// Esecuzione della query
	mysqli_stmt_bind_param($istruzioneSQL, "iiii", $lat, $lon, $v, $iddispositivo);
	mysqli_stmt_execute($istruzioneSQL);
	
	// Chiudere la connessione
	mysqli_close($connessione);
	echo("Fatto");
?>
