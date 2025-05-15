<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Departamento</th>
            <th>Ciudad</th>
            <th>Fecha Registro</th>
            <th>Hora de registro</th>
            <th>Aceptó TYC</th>
        </tr>
    </thead>
    <tbody>
        @foreach($participants as $p)
            <tr>
                <td>{{ $p->participant->name }}</td>
                <td>{{ $p->participant->last_name }}</td>
                <td>{{ $p->participant->document_identification }}</td>
                <td>{{ $p->participant->email }}</td>
                <td>{{ $p->participant->phone }}</td>
                <td>{{ $p->participant->departamento->name ?? '' }}</td>
                <td>{{ $p->participant->municipio->name ?? '' }}</td>
                <td>{{ $p->created_at->format('d-m-Y') }}</td>
                <td>{{ $p->created_at->format('H:i:s') }}</td>
                <td>{{ $p->participant->data_authorization ? 'Sí' : 'No' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
