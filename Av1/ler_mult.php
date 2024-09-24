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
    <center><h2 style="color:lightskyblue;">➜ Listagem de todas as perguntas e respostas de múltipla escolha</h2></center>
      <?php
        $Multipla = fopen ("multiplas.txt", "r") or die ("Erro ao ler arquivo!");
        if(!(file_exists("multiplas.txt"))){
          echo "<h1>Não há perguntas e respostas de múltipla escolha!</h1>";
        }
        $cabecalho = explode(";", fgets($Multipla));
      ?>

    <center>
      <table>
         <tr>
          <th class="th"> <?php echo $cabecalho[0] ?> </th>
          <th class="th"> <?php echo $cabecalho[1] ?> </th>
          <th class="th"> <?php echo $cabecalho[2] ?> </th>
          <th class="th"> <?php echo $cabecalho[3] ?> </th>
          <th class="th"> <?php echo $cabecalho[4] ?> </th>
          <th class="th"> <?php echo $cabecalho[5] ?> </th>
          <th class="th"> <?php echo $cabecalho[6] ?> </th>
        </tr>
        <?php
           while(!feof($Multipla)){
             $c = explode(";", fgets($Multipla));
             if(!empty($c[0]) && !empty($c[1]) && !empty($c[2]) && !empty($c[3]) && !empty($c[4]) && !empty($c[5]) && !empty($c[6])){   
                echo "<tr>";
                    for($i=0; $i<count($c); $i++){
                      echo "<th>";
                      echo $c[$i];
                      echo "</th>";
                    }
                echo "</tr>"; 
             }
           }
            fclose($Multipla);
        ?>
      </table>
    </center> 
    <br>
    <a href="listar1.html" style="font-family: 'Montserrat', sans-serif;color: white;">RETORNAR</a>
  </body>

</html>