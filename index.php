<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Exemplo PHP</title>
</head>
<body>
    <h1>Data e Hora Atuais</h1>
    <?php
        date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário

        $data_hora_atual = date('d/m/Y H:i:s');
        echo "<p>A data e hora atuais são: " . $data_hora_atual . "</p>";

        // Outros exemplos de formatação
        $data_atual = date('d/m/Y');
        echo "<p>A data atual é: " . $data_atual . "</p>";

        $hora_atual = date('H:i:s');
        echo "<p>A hora atual é: " . $hora_atual . "</p>";
    ?>
</body>
</html>


