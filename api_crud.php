<?php
// api_crud.php
// Script PHP per operazioni CRUD su https://restful-api.dev/

function callApi($method, $url, $data = null) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

// Crea un elemento
function createItem($data) {
    return callApi('POST', 'https://restful-api.dev/api/v1/objects', $data);
}

// Visualizza un elemento
function readItem($id) {
    return callApi('GET', "https://restful-api.dev/api/v1/objects/$id");
}

// Modifica un elemento
function updateItem($id, $data) {
    return callApi('PUT', "https://restful-api.dev/api/v1/objects/$id", $data);
}

// Elimina un elemento
function deleteItem($id) {
    return callApi('DELETE', "https://restful-api.dev/api/v1/objects/$id");
}


// Se chiamato con ?read=ID restituisce il risultato della lettura
if (isset($_GET['read'])) {
    $id = intval($_GET['read']);
    header('Content-Type: application/json');
    echo readItem($id);
    exit;
}

?>
