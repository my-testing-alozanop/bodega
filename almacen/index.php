<?php
include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php');


include ('../app/controllers/almacen/listado_de_productos.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Listado de productos</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Productos registrados</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>

                        </div>

                        <div class="card-body" style="display: block;">
                           <div class="table table-responsive">
                               <table id="example1" class="table table-bordered table-striped table-sm">
                                   <thead>
                                   <tr class="text-center">
                                       <th>Nro</th>
                                       <th>Código</th>
                                       <th>Categoría</th>
                                       <th>Imagen</th>
                                       <th>Nombre</th>
                                       <th>Descripción</th>
                                       <th>Stock</th>
                                       <th>Precio compra</th>
                                       <th>Precio venta</th>
                                       <th>Fecha compra</th>
                                       <th>Usuario</th>
                                       <th>Acciones</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <?php
                                   $contador = 0;
                                   foreach ($productos_datos as $productos_dato){
                                       $id_producto = $productos_dato['id_producto']; ?>
                                       <tr>
                                           <td class="text-center"><?php echo $contador = $contador + 1; ?></td>
                                           <td><?php echo $productos_dato['codigo'];?></td>
                                           <td><?php echo $productos_dato['categoria'];?></td>
                                           <td>
                                               <img src="<?php echo $URL."/almacen/img_productos/".$productos_dato['imagen'];?>" width="50px" alt="asdf">
                                           </td>
                                           <td><?php echo $productos_dato['nombre'];?></td>
                                           <td><?php echo $productos_dato['descripcion'];?></td>
                                           <td><?php echo $productos_dato['stock'];?></td>
                                           <td><?php echo $productos_dato['precio_compra'];?></td>
                                           <td><?php echo $productos_dato['precio_venta'];?></td>
                                           <td><?php echo $productos_dato['fecha_ingreso'];?></td>
                                           <td><?php echo $productos_dato['email'];?></td>
                                           <td>
                                                   <div class="btn-group">
                                                       <a href="/almacen/show.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Ver</a>
                                                       <a href="/almacen/update.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-success btn-sm"><i class="fa fa-pencil-alt"></i> Editar</a>
                                                       <a href="/almacen/delete.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Borrar</a>
                                                   </div>
                                           </td>
                                       </tr>
                                       <?php
                                   }
                                   ?>
                                   </tbody>
                                   </tfoot>
                               </table>
                           </div>
                        </div>

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


<script>
    $(function () {
        $("#example1").DataTable({
            "pageLength": 5,
            "language": {
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
                "infoEmpty": "Mostrando 0 a 0 de 0 Roles",
                "infoFiltered": "(Filtrado de _MAX_ total Roles)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Roles",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
            },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-column'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

</script>
