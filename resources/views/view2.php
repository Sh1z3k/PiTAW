<!DOCTYPE html>
<html lang="en">
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
        echo date("l", time());
        ?>
        godzina: <?php
        echo date("H:m:s", time());
        ?></h2> 
        
    </main>
	<script src="index.js"></script>
  </body>
</html>