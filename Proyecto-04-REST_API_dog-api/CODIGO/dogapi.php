<?php

// ID del Husky
$breed_id = 8;

// URL de la API
$url = "https://api.thedogapi.com/v1/images/search?breed_id={$breed_id}&limit=5";

// Inicializar cURL
$ch = curl_init();

// Configuración
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// API KEY
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'x-api-key: live_wWAvId0S7qcIHtEWkBjl0FWoXg6I5wmtlNlIo7sFrFpXqHgXsS9Oyt9RBtZlsHlw'
));

// Ejecutar
$response = curl_exec($ch);

// Verificar errores
if($response === false) {

    echo 'Error: ' . curl_error($ch);

} else {

    // Convertir JSON
    $data = json_decode($response, true);

    // Mostrar imágenes
    echo '<h1>Imágenes Husky</h1>';

    foreach($data as $image) {

        echo '<img src="' . $image['url'] . '" style="width:200px;"><br>';

    }
}

// Cerrar conexión
curl_close($ch);

?>