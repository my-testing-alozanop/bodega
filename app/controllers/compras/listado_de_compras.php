<?php

$sql_compras = "SELECT *,pro.codigo AS codigo, pro.nombre AS nombre_producto 
FROM tb_compras AS co INNER JOIN tb_almacen AS pro 
ON co.id_producto = pro.id_producto";
$query_compras = $pdo->prepare($sql_compras);
$query_compras->execute();
$compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);