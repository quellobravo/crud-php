<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Modifica Evento</title>
  </head>
  <body>
    <h1>Modifica evento</h1>
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
      $istruzioneSQL = "UPDATE  eventi SET ";
      $istruzioneSQL .= "titolo='".$_POST['titoloEvento']."'";
	  $istruzioneSQL .= ",localita='".$_POST['loc']."'";
      $istruzioneSQL .= ",descrizione='".$_POST['descrizione']."'";
	  $istruzioneSQL .= ",lat='".$_POST['lat']."'";
	  $istruzioneSQL .= ",lon='".$_POST['lon']."'";
	  $istruzioneSQL .= " WHERE id=".$_POST['id'].";";

	  
      mysqli_query($connessione,$istruzioneSQL);

      echo("<p>Operazione di modifica eseguita</p>");
      
      mysqli_close($connessione);
    ?> 	
  
  </body>
</html>