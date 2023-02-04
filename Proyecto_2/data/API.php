<?php 
function getData() {
    return json_decode(file_get_contents(__DIR__ . '/usuarios.json', true));
}

print json_encode(getData());
?>