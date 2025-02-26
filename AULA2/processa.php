<?php
// Obtendo os dados enviados pelo formulário (GET ou POST)
$dados = $_REQUEST;

// Obtendo informações do cabeçalho da requisição
$cabecalhos = apache_request_headers();

// Obtendo o método da requisição
$metodo = $_SERVER['REQUEST_METHOD'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Dados Recebidos</h2>
        <p><strong>Método da Requisição:</strong> <?php echo $metodo; ?></p>

        <h3>Dados do Formulário</h3>
        <ul>
            <?php foreach ($dados as $chave => $valor): ?>
                <li><strong><?php echo htmlspecialchars($chave); ?>:</strong> <?php echo htmlspecialchars($valor); ?></li>
            <?php endforeach; ?>
        </ul>

        <h3>Cabeçalhos da Requisição</h3>
        <ul>
            <?php foreach ($cabecalhos as $chave => $valor): ?>
                <li><strong><?php echo htmlspecialchars($chave); ?>:</strong> <?php echo htmlspecialchars($valor); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
