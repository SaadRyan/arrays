<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos estão preenchidos
    if (isset($_POST["pais"]) && isset($_POST["cidade"]) && isset($_POST["distancia"]) && isset($_POST["voltas"])) {
        // Obtém os dados do formulário
        $pais = $_POST["pais"];
        $cidade = $_POST["cidade"];
        $distancia = $_POST["distancia"];
        $voltas = $_POST["voltas"];

        // Inclui o controlador de pistas
        require_once "../app/PistasController.php";

        // Cria uma instância do controlador de pistas
        $pistaController = new PistaController();

        // Adiciona a pista
        $pistaController->adicionarPista($pais, $cidade, $distancia, $voltas);

        // Redireciona de volta para o formulário com uma mensagem de sucesso
        header("Location: index.html?success=true");
        exit();
    } else {
        // Se algum campo estiver faltando, redireciona de volta para o formulário com uma mensagem de erro
        header("Location: index.html?error=true");
        exit();
    }
} else {
    // Se a requisição não for POST, redireciona de volta para o formulário
    header("Location: index.html");
    exit();
}
?>