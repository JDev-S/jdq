@extends('welcome2')
@section('contenido')

<main class="body-content">
    <!-- Navigation Bar -->
    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menu List</li>
                    </ol>
                </nav>
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Listado de categorias</h6>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table id="data-table-prueba" class="table w-100 thead-primary"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<!--model eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'ProductoController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
                </div>
                <div class="modal-footer">
                    {{ Form::hidden('id_producto') }}
                    {!! Form::submit( 'Si', ['class' => 'btn btn-danger', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>


<!-- model insertar-->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Ingresar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {{ Form::open(array('action' => 'ProductoController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                    {{ Form::text('nombre', '', array('id' => 'nombre',  'placeholder' => 'Escribe el nombre del producto','required' => 'required')) }}
                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Descripción:</label>
                    {{ Form::textarea('descripcion', '', array('id' => 'descripcion',  'placeholder' => 'Escribe la descripción','required' => 'required')) }}
                </div>

                <div class="modal-body">
                    <label for="validationCustom12">Imagen del producto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotografia_miniatura" name="fotografia_miniatura">
                        <label class="custom-file-label">Elige la imagen</label>

                    </div>
                </div>

                <div class="modal-footer">
                    {!! Form::submit( 'Insertar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>
</div>


<!-- model editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'ProductoController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                    {{ Form::text('nombre', '', array('id' => 'nombre','class'=>'form-control',  'placeholder' => 'Escribe nombre del producto ','required' => 'required')) }}
                    {{ Form::hidden('id_producto', '', array('id' => 'id_producto',  'placeholder' => 'Id')) }}

                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Descripcion:</label>
                    {{ Form::textarea('descripcion', '', array('id' => 'descripcion','class'=>'form-control',  'placeholder' => 'Escribe descripcion del producto ','required' => 'required')) }}

                </div>

                <div class="modal-body">
                    <label for="validationCustom12">Imagen del producto</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotografia_miniatura" name="fotografia_miniatura">
                        <label class="custom-file-label">Elige la imagen</label>

                    </div>
                </div>


                <div class="modal-footer">
                    {!! Form::submit( 'Actualizar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>


@section('scripts')

<script type="text/javascript">
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var nombre = button.data('nombre')
        var descripcion = button.data('descripcion')
        var foto = button.data('imagen_producto')

        var modal = $(this)
        modal.find('#id_producto').val(id)
        modal.find('#nombre').val(nombre)
        modal.find('#descripcion').val(descripcion)
        modal.find('#imagen_producto').val(foto)

    });

</script>

<script type="text/javascript">
    (function($) {
        'use strict';

        var datos = JSON.parse('<?= json_encode($productos) ?>');

        var arr = [];

        datos.forEach(objeto => {
            var tmp = [];
            tmp.push(


                objeto.nombre,
                objeto.descripcion,
                '<img src="' + objeto.imagen_producto + '" width="100px" height="100px">',

                '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + objeto.id_producto + '" data-nombre="' + objeto.nombre + '"><i class="fa fa-trash"></i></button>' +

                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="' + objeto.id_producto + '" data-nombre="' + objeto.nombre + '" data-foto="' + objeto.imagen_producto + '" data-descripcion="' + objeto.descripcion + '" ><i class="fa fa-pencil-alt"></i></button>'

                //objeto.id_alimento,
                //objeto.id_categoria

            );

            arr.push(tmp);
            console.log(arr);

        });
        var tableTwo = $('#data-table-prueba').DataTable({
            data: arr,
            columns: [


                {
                    title: "Nombre"
                },
                {
                    title: "Descripcion"
                },
                {
                    title: "Imagen"
                },
                {
                    title: "Acciones"
                }
            ],
        });
    })(jQuery);

</script>


<script type="text/javascript">
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var nombre = button.data('nombre')
        var modal = $(this)
        modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el producto: ' + nombre + '?')
        document.forms[0].id_producto.value = id
    });

</script>
@stop
@stop
