@extends('welcome2')
@section('contenido')

<main class="body-content">
    <!-- Navigation Bar -->
    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item">Mensajes</li>
                        <li class="breadcrumb-item active" aria-current="page">Listado de mensajería</li>
                    </ol>
                </nav>
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Mensajeria</h6>

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
                <h5 class="modal-title" id="deleteModalLabel">Eliminar mensaje</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'MensajesController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el mensaje?</label>
                </div>
                <div class="modal-footer">
                    {{ Form::hidden('id_mensaje') }}
                    {!! Form::submit( 'Si', ['class' => 'btn btn-danger', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script type="text/javascript">
    (function($) {
        'use strict';

        var datos = JSON.parse('<?= json_encode($mensajes) ?>');

        var arr = [];

        datos.forEach(objeto => {
            var tmp = [];
            tmp.push(
                objeto.fecha,
                objeto.nombre,
                objeto.email,
                objeto.telefono,
                objeto.mensaje,
                '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + objeto.id_mensaje + '" data-categoria="' + objeto.nombre + '"><i class="fa fa-trash"></i></button>'
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
                    title: "Fecha"
                },
                {
                    title: "Nombre"
                },
                {
                    title: "Email"
                },
                {
                    title: "Teléfono"
                },
                {
                    title: "Mensaje"
                },
                {
                    title: "Accion"
                }
            ],
        });
    })(jQuery);

</script>


<script type="text/javascript">
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var categoria = button.data('categoria')
        var modal = $(this)
        modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el mensaje con el nombre: ' + categoria + '?')
        document.forms[0].id_mensaje.value = id
    });

</script>
@stop
@stop