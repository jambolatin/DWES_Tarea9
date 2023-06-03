<?php

/**
 * Obtiene datos provenientes de una API REST externa en formato .json
 * los decodifica y los muestra por pantalla.
 * 
 * @param $url  La url de la API Rest externa
 * @param $result El conjunto de datos obtenido en json sin decodificar
 * @param $datos El conjunto de datos json ya decodificados
 * @author davidcadu@yahoo.es 03/06/2023 15:18
 * @return
 *
 */
function mostrarAPI(){
    $url= "https://datos.madrid.es/egob/catalogo/205026-0-cementerios.json";
    $result = file_get_contents($url);
    $datos = json_decode($result, true);

    echo "<h2>Lista de cementerios de la comunidad de Madrid</h2>";

    foreach($datos["@graph"] as $dato)
    {
        echo "ID: ".$dato["id"]."<br>"; 
        echo "Nombre: ".$dato["title"]."<br>";
    }
}

mostrarAPI();
?>