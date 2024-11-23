<?php
function readData() {
    if (file_exists('data.json')) {
        $json = file_get_contents('data.json');
        return json_decode($json, true);
    }
    return ['customers' => []];
}

function writeData($data) {
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $json);
}
?>
