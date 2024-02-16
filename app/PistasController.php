<?php

class PistaController {
    private $pistas = [];

    public function adicionarPista($pais, $cidade, $distancia, $voltas) {
        $pista = [
            'pais' => $pais,
            'cidade' => $cidade,
            'distancia' => $distancia,
            'voltas' => $voltas
        ];
        $this->pistas[] = $pista;
    }

    public function listarPistas() {
        return $this->pistas;
    }
}

// Exemplo de uso
$pistaController = new PistaController();

// Adicionar algumas pistas
$pistaController->adicionarPista("Brasil", "São Paulo", 4.309, 71);
$pistaController->adicionarPista("Itália", "Monza", 5.793, 53);
$pistaController->adicionarPista("Estados Unidos", "Austin", 5.513, 56);

// Listar pistas
$pistas = $pistaController->listarPistas();

?>