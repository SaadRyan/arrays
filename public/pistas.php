<?php
require_once '../app/PistasController.php';

$pistaController = new PistaController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pais = $_POST["pais"];
    $cidade = $_POST["cidade"];
    $distancia = $_POST["distancia"];
    $voltas = $_POST["voltas"];
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
<button><a href="index.html">Voltar</a></button>
<fieldset>
    <legend><h2>PISTAS TOPS:</h2></legend>
    <h3>Adicionar Pistas TOPS</h3>

    <form method="post">
        <input type="text" name="pais" placeholder="País de Origem">
        <input type="text" name="cidade" placeholder="Cidade">
        <input type="text" name="distancia" placeholder="Distância">
        <input type="text" name="voltas" placeholder="Voltas">
        <input type="submit" value="Enviar" placeholder="Enviar"><br><br>
    </form>

    <h1>Adicionar Pista</h1>
    <form action="adicionar_pista.php" method="post">
        <label for="pais">País:</label><br>
        <input type="text" id="pais" name="pais"><br>
        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade"><br>
        <label for="distancia">Distância (km):</label><br>
        <input type="text" id="distancia" name="distancia"><br>
        <label for="voltas">Voltas:</label><br>
        <input type="text" id="voltas" name="voltas"><br><br>
        <input type="submit" value="Adicionar Pista">
    </form>

    <?php
        // Exibir informações das pistas
foreach ($pistas as $pista) {
    echo "País: " . $pista['pais'] . "\n"; echo '<br>';
    echo "Cidade: " . $pista['cidade'] . "\n"; echo '<br>';
    echo "Distância: " . $pista['distancia'] . " km\n"; echo '<br>';
    echo "Voltas: " . $pista['voltas'] . "\n"; echo '<br>';
    echo "\n"; echo '<br>';
}
    ?>
    </fieldset>

</body>
</html>
