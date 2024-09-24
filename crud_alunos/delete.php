<?php 
$Alunos = fopen("alunos.txt", "r") or die("Erro ao ler arquivo!");

$temp = fopen("temp.txt", "w+") or die("Erro ao criar arquivo!");

while (($linha = fgets($Alunos)) !== false) {
    $c = explode(";", $linha);
    if (count($c) >= 4) { // Verificação para evitar erros de índice
        $linha = $c[0] . ";" . $c[1] . ";" . $c[2] . ";" . $c[3];
        fwrite($temp, $linha . "\n");
    }
}

fclose($temp);
fclose($Alunos);
?>

<html>
<body>
  <h1>Deletar os dados de um aluno</h1>
  <?php
    $mat = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mat = $_POST["mat"];

        $Alunos = fopen("alunos.txt", "w+") or die("Erro ao abrir arquivo!");
        $temp = fopen("temp.txt", "r") or die("Erro ao ler arquivo!");

        while (($linha = fgets($temp)) !== false) {
            $c = explode(";", $linha);
            if (count($c) >= 4 && trim($c[2]) != trim($mat)) { // Verificação e exclusão do aluno
                $linha = $c[0] . ";" . $c[1] . ";" . $c[2] . ";" . $c[3];
                fwrite($Alunos, $linha . "\n");
            }
        }

        fclose($temp);
        fclose($Alunos);
        unlink("temp.txt");
    }
  ?>      
  <center><h2 style="color:green;">Os dados do aluno foram deletados com sucesso!</h2></center>
  <p><a href="index.html">⇐ Retornar</a></p>
</body>
</html>
