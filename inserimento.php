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
      $connessione = mysqli_connect($servername, $username, $password, $db);
      
      // Check connection
      if (!$connessione) { die("Errore connessione");	}
      
      $istruzioneSQL = "INSERT INTO 'eventi'('titolo', 'descrizione', 'tipo', 'accesso', 'lat', 'long') VALUES (";
      $istruzione .= "'".$_POST['titolo']."'";
      $istruzione .= ",'".$_POST['descrizione']."'";
      $istruzione .= ",'".$_POST['tipo']."'";
      $istruzione .= ",'".$_POST['accesso']."'";
      $istruzione .= ",'".$_POST['lat']."'";
      $istruzione .= ",'".$_POST['long']."'";
      $istruzione .= ");";
      mysqli_query($connessione,$istruzioneSQL);

      echo("<p>Operazione di inserimento eseguita</p>");
      
      mysqli_close($connessione);
    ?> 	
  
  </body>
</html>
