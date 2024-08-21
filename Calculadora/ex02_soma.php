<?php
$v1 = $_GET["a"];
$v2 = $_GET["b"];
$calcular = $_GET["calcular"];
$resultado = 0;

  switch($calcular)
    {
    case '+':
      $resultado = $v1 + $v2;
      break;

    case '-':
      $resultado = $v1 - $v2;
      break;

    case '*':
      $resultado = $v1 * $v2;
      break;

    case '/':
      $resultado = $v1 / $v2;
      break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<h1>Resultado: $resultado</h1>"; ?>
</body>    
</html>