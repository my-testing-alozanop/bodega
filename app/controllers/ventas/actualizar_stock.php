<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 15/2/2023
 * Time: 19:35
 */

include ('../../config.php');


$id_producto = $_GET['id_producto'];
$stock_calculado = $_GET['stock_calculado'];



$sentencia = $pdo->prepare("UPDATE tb_almacen SET stock=:stock WHERE id_producto = :id_producto ");
$sentencia->bindParam('stock',$stock_calculado);
$sentencia->bindParam('id_producto',$id_producto);


if($sentencia->execute()){

   echo "Se actualizo todo";
   
}else{

  echo "Error al actualizar";

}





