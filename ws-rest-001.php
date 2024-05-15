<?php
    header('Content-Type: application/json');

    if (strcmp($_SERVER['HTTP_'],"")==0)
      {
        switch ($_SERVER["REQUEST_METHOD"])
          {
          case "GET":
          break;
          case "DELETE":
          break;
          default:
          break;
          }
      }
?>
