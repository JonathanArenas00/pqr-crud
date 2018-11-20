<table class="table table-responsive" id="pqrs-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Motivosolicitud</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pqrs as $pqr)
        <tr>
            <td>{!! $pqr->nombre !!}</td>
            <td>{!! $pqr->documento !!}</td>
            <td>{!! $pqr->correo !!}</td>
            <td>{!! $pqr->direccion !!}</td>
            <td>{!! $pqr->telefono !!}</td>
            <td>{!! $pqr->motivoSolicitud !!}</td>
            <td>
                {!! Form::open(['route' => ['pqrs.destroy', $pqr->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pqrs.show', [$pqr->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pqrs.edit', [$pqr->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>