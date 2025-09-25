<?php
// api_crud_curl.php
// Esempio di richieste CRUD verso https://beeceptor.com/crud-api/items

function callApi($method, $url, $data = false) {
    $curl = curl_init();
    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            break;
        case "DELETE":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
    // Opzioni comuni
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}

// CREATE
$create = callApi('POST', 'https://beeceptor.com/crud-api/items', ["name" => "Test Item", "value" => 123]);
echo "CREATE: $create\n";

// READ
$read = callApi('GET', 'https://beeceptor.com/crud-api/items');
echo "READ: $read\n";

// UPDATE (id=1 come esempio)
$update = callApi('PUT', 'https://beeceptor.com/crud-api/items/1', ["name" => "Updated Item", "value" => 456]);
echo "UPDATE: $update\n";

// DELETE (id=1 come esempio)
$delete = callApi('DELETE', 'https://beeceptor.com/crud-api/items/1');
echo "DELETE: $delete\n";
