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
    $url= "https://datosabiertos.regiondemurcia.es/catalogo/recursos/ayuntamiento-de-molina-de-segura/elec-municipal-2007.json";
    $result = file_get_contents($url);
    $datos = json_decode($result, true);

    echo "<h2>Listado de mesas electorales de la comunidad de Murcia</h2>";

    foreach($datos as $dato)
    {
        echo "Distrito: ".$dato["distrito"]."<br>";
        echo "Sección: ".$dato["seccion"]."<br>";
        echo "Mesa: ".$dato["mesa"]."<br>";
        echo "Colegio: ".$dato["colegio"]."<br>";
        echo "<hr>";
       
}
}

mostrarAPI();
?>
