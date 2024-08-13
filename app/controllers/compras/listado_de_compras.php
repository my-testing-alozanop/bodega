<?php

$sql_compras = "SELECT *,pro.codigo AS codigo, pro.nombre AS nombre_producto, pro.descripcion AS descripcion,
pro.stock AS stock, pro.stock_minimo AS stock_minimo, pro.stock_maximo AS stock_maximo,
pro.precio_compra AS precio_compra_producto, pro.precio_venta AS precio_venta_producto, 
pro.fecha_ingreso AS fecha_ingreso, pro.imagen AS imagen,
cat.nombre_categoria AS nombre_categoria, us.nombres AS nombre_usuarios_producto,
prov.nombre_proveedor AS nombre_proveedor, prov.celular AS celular_proveedor,
prov.telefono AS telefono_proveedor, prov.empresa AS empresa, 
prov.email AS email_proveedor, prov.direccion AS direccion_proveedor,
us.nombres AS nombres_usuario
FROM tb_compras AS co 
INNER JOIN tb_almacen AS pro ON co.id_producto = pro.id_producto 
INNER JOIN tb_categorias AS cat ON cat.id_categoria = pro.id_categoria
INNER JOIN tb_usuarios AS us ON co.id_usuario = us.id_usuario
INNER JOIN tb_proveedores AS prov ON co.id_proveedor = prov.id_proveedor;";
$query_compras = $pdo->prepare($sql_compras);
$query_compras->execute();
$compras_datos = $query_compras->fetchAll(PDO::FETCH_ASSOC);