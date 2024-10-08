<!DOCTYPE html>
<html>
  <head>
    <style>
      th, td {
          border: 1px solid;
          padding: 5px;
          color: white;
        }
      
      body{
        margin: 0;
        padding: 0;
        background: #2d3436;
      }
      .middle{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
      }
      .btn{
        position: relative;
        display: block;
        color: white;
        font-size: 14px;
        font-family: "montserrat";
        text-decoration: none;
        margin: 30px 0;
        border: 2px solid lightskyblue;
        padding: 14px 60px;
        text-transform: uppercase;
        overflow: hidden;
        transition: 1s all ease;
      }
      .btn::before{
        background: lightskyblue;
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: -1;
        transition: all 0.6s ease;
      }
      
      .btn1::before{
        width: 0%;
        height: 100%;
      }
      
      .btn1:hover::before{
        width: 100%;
      }
      
      
      .btn2::before{
        width: 100%;
        height: 0%;
      }
      .btn2:hover::before{
        height: 100%;
      }
      
      .btn3::before{
        width: 100%;
        height: 0%;
        transform: translate(-50%,-50%) rotate(45deg);
      }
      .btn3:hover::before{
        height: 380%;
      }
      
      .btn4::before{
        width: 100%;
        height: 0%;
        transform: translate(-50%,-50%) rotate(-45deg);
      }
      .btn4:hover::before{
        height: 380%;
      }

      h3 {
        color:red;
      }
      
       p{
        color:white;
        white-space: nowrap;
      }

      div{
        border-style: solid;
        border-color: white;
      }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Syncopate:wght@700&display=swap" rel="stylesheet">
	
    <title>JOGOS COORPORATIVOS</title>
    <link rel="stylesheet" href="style.css">
  </head> 
  
<body>
  	<h1 style="color:lightskyblue;">➜ Ler dados de uma pergunta escrita </h1>
  <?php
  $pergunta = "";
  $r1="";
  if($_SERVER["REQUEST_METHOD"]=="POST"){
      $pergunta = $_POST["pergunta"];
    $Escritas = fopen ("escritas.txt", "r") or die ("Erro ao ler arquivo!");
        while(!feof($Escritas)){
          $c = explode(";", fgets($Escritas));
          if($c[0] == $pergunta && !empty($c[1])){ #usar $pergunta aqui
            $r1=$c[1];
             break;
          }
        }
  }
    if(!empty($pergunta) && !empty($r1)){
      echo "<center><div>";
      echo "<h3>Pergunta: </h3>" . "<p>" . $pergunta . "</p>";
      echo "<h3>Resposta: </h3>" . "<p>" . $r1 . "</p></div></center>";
    }else{
      echo "<center><h3>Essa pergunta não existe! </h3></center>";
    }
    
?>

  <a href="listar1.html" style="font-family: 'Montserrat', sans-serif;color: white;">RETORNAR</a>
</body>

</html>