<?php 

function resize_image() {
        // Fichero y nuevo tamaño
        $nombre_fichero = 'test.png';
        $porcentaje = 0.1;

        // Tipo de contenido
        header('Content-Type: image/png');

        // Obtener los nuevos tamaños
        list($ancho, $alto) = getimagesize($nombre_fichero);
        $nuevo_ancho = $ancho * $porcentaje;
        $nuevo_alto = $alto * $porcentaje;

        // Cargar
        $thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
        $origen = imagecreatefrompng($nombre_fichero);

        // Cambiar el tamaño
        imagecopyresized($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);

        // Imprimir
        imagejpeg($thumb);
}

function base64_to_jpeg($base64_string, $output_file) {
    $ifp = fopen($output_file, "wb"); 

    $data = explode(',', $base64_string);

    fwrite($ifp, base64_decode($data[1])); 
    fclose($ifp); 

    return $output_file; 
}

resize_image();