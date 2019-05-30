<?php
  //Asigno el primer archivo xml a una variable
    $xml = simplexml_load_file("../storage/response.xml");
    $namespaces = $xml->getNameSpaces(true);
    $Airschema=$xml->children($namespaces['air']);//esta es la plantilla aerea
  //Asigno el segundo xml a una variable
    $xml2 = simplexml_load_file("../storage/response2.xml");
    $namespaces2 = $xml2->getNameSpaces(true);
    $AirAvail=$xml2->children($namespaces2['s'])->children($namespaces2['Body']);//Esta es la la respuesta de los vuelos disponibles

  //Funciones para comenzar con el arreglo json




 ?>
