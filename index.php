<?php
     /*Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”,
      altrimenti stampare una stringa rossa.

      */


      $password_GET = $_GET['password'];
      $password = 'Boolean';
      if ($password_GET == $password) {
          echo ' <h1 style="color:green"> La password è Giusta !!!! </h1>';

      }else {
          echo $password_GET . '<h1 style="color:red"> La password è sbagliata !!!! </h1>';
      }






 ?>
