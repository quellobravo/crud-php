<?php
$fp = stream_socket_client("tcp://indirizzo:porta", $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    fwrite($fp, "GET /db/datiOrarioTreni.json HTTP/1.0\r\nHost: www.nesea.eu\r\nAccept: */*\r\n\r\n");
    //while (!feof($fp)) 
    {
        echo fgets($fp, 1024);
    }
    fclose($fp);
}
?>
