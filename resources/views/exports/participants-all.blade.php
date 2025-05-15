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
        @foreach($participants as $participant)
            <tr>
                <td>{{ $participant->last_name }}</td>
                <td>{{ $participant->document_identification }}</td>
                <td>{{ $participant->email }}</td>
                <td>{{ $participant->phone }}</td>
                <td>{{ $participant->departamento->name ?? '' }}</td>
                <td>{{ $participant->municipio->name ?? '' }}</td>
                <td>{{ $participant->created_at->format('d-m-Y') }}</td>
                <td>{{ $participant->created_at->format('H:i:s') }}</td>
                <td>{{ $participant->data_authorization ? 'Sí' : 'No' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
