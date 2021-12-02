<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <!-- Title automatico -->
  <title>Entrata e Saída</title>
</head>

<body>
  <main>
    <?php
      function showBox($name, $line) {
        echo "  
          <div class='box'>
            <p>[ $name | linha $line ]</p>
          </div>
        ";
      };
    ?>
  </main>
</body>

</html>