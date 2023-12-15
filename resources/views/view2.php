<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1>View 2</h1>
        <h2>Dziś jest  <?php

        $dayOfWeek = date('N');
        $days = array(
            1 => 'poniedziałek',
            2 => 'wtorek',
            3 => 'środa',
            4 => 'czwartek',
            5 => 'piątek',
            6 => 'sobota',
            7 => 'niedziela'
        );
        
        echo $days[$dayOfWeek];
        ?>
        godzina: <?php
        echo date('H:i:s', strtotime('+1 hour'))
        ?></h2> 

        
    </main>
	<script src="index.js"></script>
  </body>
</html>