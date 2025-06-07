<?php
header('Content-Type: application/json');

$arquivo = fopen("dados.csv", "r");

// Pula o cabeçalho
$header = fgetcsv($arquivo);

$totais = [];
$gorjetas = [];

while (($linha = fgetcsv($arquivo)) !== false) {
    $totais[] = floatval($linha[0]);
    $gorjetas[] = floatval($linha[1]);
}

fclose($arquivo);

echo json_encode([
    'totais' => $totais,
    'gorjetas' => $gorjetas
]);
?>
