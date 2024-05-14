<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Inserimento Evento</title>
  </head>
  <body>
    <h1>Inserimento</h1>
    <?php
      $serverName = "localhost";
      $IPserver = "127.0.1";
      $username = "applicazioneWeb";
      $password = "123456_Web&&";
      $db = "listaeventi";
      
      // Stabilisce la connessione al DBMS remoto
      $connessione = mysqli_connect($serverName, $username, $password, $db);
      
      // Verifica che la connessione sia attiva
      if (!$connessione) { die("Errore connessione");	}
      
	    // Costruzione dell'istruzione SQL per l'inserimento dei dati del form
      $istruzioneSQL = "INSERT INTO eventi (titolo, localita, descrizione, tipo, lat, lon) VALUES (";
      $istruzioneSQL .= "'".$_POST['titoloEvento']."'";
	    $istruzioneSQL .= ",'".$_POST['loc']."'";
      $istruzioneSQL .= ",'".$_POST['descrizione']."'";
	  
	    // Elaborazione del campo checkbox del form r3[]
	    // si inseriscono i soli valori indicati dall'utente.
      $istruzioneSQL .= ",':";
	    if(isset($_POST['r3'])) 
		    foreach($_POST['r3'] as $voce){ $istruzioneSQL .= $voce.":"; }
	    $istruzioneSQL .= "'";
	  
      $istruzioneSQL .= ",'".$_POST['lat']."'";
      $istruzioneSQL .= ",'".$_POST['lon']."'";
      $istruzioneSQL .= ");";
	  
      mysqli_query($connessione,$istruzioneSQL);

      echo("<p>Operazione di inserimento eseguita</p>");
      
      mysqli_close($connessione);
    ?> 	
  
  </body>
</html>
