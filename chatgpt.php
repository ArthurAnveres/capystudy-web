<?php
// Chave de API do OpenAI
error_reporting(E_ALL);
ini_set('display_errors', 1);

$apiKey = 'sk-SktzgjXL4W9LKtIk2cujLWg2y0yk2MLawuoPV6xWUoT3BlbkFJudXFEdeqcWQkDYHg22wJx1Ijr1T8R177rNdSXUZDYA';

function sendMessage($userMessage) {
    global $apiKey;

    // Verifica se a mensagem está vazia
    if (empty($userMessage)) {
        return json_encode(['error' => 'Mensagem não pode ser vazia.']);
    }

    // Configura os dados para a requisição
    $data = [
        'model' => 'gpt-3.5-turbo',
        'messages' => [['role' => 'user', 'content' => $userMessage]],
        'max_tokens' => 2048,
        'temperature' => 0.5
    ];

    // Inicializa o cURL
    $ch = curl_init('https://api.openai.com/v1/chat/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey,
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Executa a requisição
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Fecha a conexão cURL
    curl_close($ch);

    // Verifica o código de resposta
    if ($httpCode !== 200) {
        return json_encode(['error' => 'Erro ao chamar a API: ' . $response]);
    }

    // Retorna a resposta da API
    return $response;
}

// Exemplo de uso
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    $userMessage = $_POST['message'];
    $result = sendMessage($userMessage);
    echo $result; // Retorna a resposta da API para o cliente
}
?>
