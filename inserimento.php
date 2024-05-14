<!DOCTYPE html>
<html lang="it">
  <head>
    <title>Inserimento</title>
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
      
      // Check connection
      if (!$connessione) { die("Errore connessione");	}
      
      $istruzioneSQL = "INSERT INTO eventi (titolo, descrizione, tipo, lat, lon) VALUES (";
      $istruzioneSQL .= "'".$_POST['titoloEvento']."'";
      $istruzioneSQL .= ",'".$_POST['descrizione']."'";
      $istruzioneSQL .= ",'".$_POST['r1']."'";
      $istruzioneSQL .= ",'".$_POST['lat']."'";
      $istruzioneSQL .= ",'".$_POST['lon']."'";
      $istruzioneSQL .= ");";
      mysqli_query($connessione,$istruzioneSQL);

      echo("<p>Operazione di inserimento eseguita</p>");
      
      mysqli_close($connessione);
    ?> 	
  
  </body>
</html>
