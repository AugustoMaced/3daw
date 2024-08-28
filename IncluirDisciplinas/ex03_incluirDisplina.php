<?php
    $msg = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
        $nome = $_POST["nome"];
        $sigla = $_POST["sigla"];
        $carga = $_POST["carga"];
        
        // Verifica se os campos não estão vazios
        if (!empty($nome) && !empty($sigla) && !empty($carga)) {
            // Exibe as variáveis
            echo "Nome: " . $nome . " | Sigla: " . $sigla . " | Carga Horária: " . $carga;

            // Abre ou cria o arquivo disciplinas.txt
            $arqDisc = fopen("disciplinas.txt", "a") or die("Erro ao criar arquivo");

            // Prepara a linha para ser escrita no arquivo
            $linha = $nome . ";" . $sigla . ";" . $carga . "\n";

            // Escreve a linha no arquivo
            fwrite($arqDisc, $linha);

            // Fecha o arquivo
            fclose($arqDisc);

            $msg = "Disciplina cadastrada com sucesso!";
        } else {
            $msg = "Por favor, preencha todos os campos!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Criar Nova Disciplina</title>
</head>
<body>
    <h1>Criar Nova Disciplina</h1>
    <form action="ex07_incluirDisciplina.php" method="POST">
        Nome: <input type="text" name="nome">
        <br><br>
        Sigla: <input type="text" name="sigla">
        <br><br>
        Carga Horária: <input type="text" name="carga">
        <br><br>
        <input type="submit" value="Criar Nova Disciplina">
    </form>
    <p><?php echo $msg; ?></p>
</body>
</html>
