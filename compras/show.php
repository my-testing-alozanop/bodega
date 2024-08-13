<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php');

include ('../app/controllers/almacen/listado_de_productos.php');
include ('../app/controllers/proveedores/listado_de_proveedores.php');
include ('../app/controllers/compras/cargar_compra.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Compra nro <?php echo $nro_compra; ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
              <div class="col-md-9">
                <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos de la compra</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                          <div class="row" style="font-size: 12px">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                          <input type="hidden" id="id_producto">
                                                            <label for="">Código:</label>
                                                            <input type="text" class="form-control" value="<?php echo $codigo ;?>"
                                                                   id="codigo" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Categoría:</label>
                                                            <div style="display: flex">
                                                                <input type="text" class="form-control" value="<?php echo $nombre_categoria ;?>" id="categoria" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Nombre del producto:</label>
                                                            <input type="text" name="nombre" id="nombre_producto" class="form-control" value="<?php echo $nombre_producto ;?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="">Usuario</label>
                                                            <input type="text" class="form-control" value="<?php echo $nombres_usuario ;?>" id="usuario_producto" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="">Descripción del producto:</label>
                                                            <textarea name="descripcion" id="descripcion_producto" cols="30" rows="2" class="form-control" disabled><?php echo $descripcion ;?></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock:</label>
                                                            <input type="number" name="stock" id="stock" class="form-control" value="<?php echo $stock ;?>" style="background-color: #fff819;" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock mínimo:</label>
                                                            <input type="number" name="stock_minimo" id="stock_minimo" class="form-control" value="<?php echo $stock_minimo ;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Stock máximo:</label>
                                                            <input type="number" name="stock_maximo" id="stock_maximo" class="form-control" value="<?php echo $stock_maximo ;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio compra:</label>
                                                            <input type="number" name="precio_compra" id="precio_compra" class="form-control" value="<?php echo $precio_compra_producto ;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Precio venta:</label>
                                                            <input type="number" name="precio_venta" id="precio_venta" class="form-control" value="<?php echo $precio_venta_producto ;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="">Fecha de ingreso:</label>
                                                            <!-- <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" disabled> -->
                                                             <input type="text" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="<?php echo $fecha_ingreso ;?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">Imagen del producto</label>
                                                    <center>
                                                        <img src="<?php echo $URL."/almacen/img_productos/".$imagen;?>" id="img_producto" width="50%" alt="">
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <div style="display: flex">
                            <h5>Datos del Proveedor</h5>
                      
                          </div>

                          <hr>

                          <div class="container-fluid" style="font-size: 12px;">
                            <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <input type="hidden" id="id_proveedor">
                            <label for="">Nombre del proveedor</label>
                            <input type="text" id="nombre_proveedor" class="form-control" value="<?php echo $nombre_proveedor_tabla ;?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Celular</label>
                            <input type="number" id="celular" class="form-control" value="<?php echo $celular_proveedor ;?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Teléfono</label>
                            <input type="number" id="telefono" class="form-control" value="<?php echo $telefono_proveedor ;?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Empresa</label>
                            <input type="text" id="empresa" class="form-control" value="<?php echo $empresa_proveedor ;?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" id="email" class="form-control" value="<?php echo $email_proveedor ;?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Dirección</label>
                            <textarea name="" id="direccion" cols="30" rows="3" class="form-control" disabled><?php echo $direccion_proveedor ;?></textarea>
                        </div>
                    </div>
                </div>
                          </div>

                        </div>

                    </div>
                </div>
            </div>
              </div>
              <div class="col-md-3">
                <br><br><br>  

                <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Detalle de la compra</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Numero de la compra</label>
                                              <input type="text" value="<?php echo $id_compra_get;?>" style="text-align: center;" class="form-control" disabled>
                                              <input type="hidden" value="<?php echo $id_compra_get;?>" id="nro_compra">
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Fecha de la Compra</label>
                                              <input type="date" value="<?php echo $fecha_compra;?>" class="form-control" id="fecha_compra" disabled>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Comprobante de la Compra</label>
                                              <input type="text" class="form-control" value="<?php echo $comprobante;?>" id="comprobante" disabled>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Precio de la Compra</label>
                                              <input type="text" class="form-control" value="<?php echo $precio_compra;?>" id="precio_compra_controlador" disabled>
                                            </div>
                                          </div>
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Cantidad de la Compra</label>
                                              <input type="number" id="cantidad_compra" style="text-align: center;" class="form-control" value="<?php echo $cantidad;?>" disabled>
                                            </div>
                                          </div>

                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label for="">Usuario</label>
                                              <input type="text" class="form-control" value="<?php echo $nombres_usuario;?>" disabled>
                                            </div>
                                          </div>
                                        </div> 

                                        <hr>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
        </div>




                
              </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include ('../layout/mensajes.php'); ?>
<?php include ('../layout/parte2.php'); ?>