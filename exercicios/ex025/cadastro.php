<?php
// Verifica se existem parâmetros no GET
if (!empty($_GET)) {
    echo "<h1>Parâmetros Recebidos:</h1>";
    echo "<ul>";

    // Percorre todos os parâmetros e exibe na tela
    foreach ($_GET as $key => $value) {
        echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
    }

    echo "</ul>";
} else {
    echo "<h1>Nenhum parâmetro recebido.</h1>";
}
?>