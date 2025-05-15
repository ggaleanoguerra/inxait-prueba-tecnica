    <div class="overflow-x-auto -mx-2 px-2">

        <table class="w-full text-sm text-left">
            <thead class="text-xs uppercase bg-gray-900 text-amber-500 border-b border-gray-800">
                <tr>
                    <th scope="col" class="px-2 py-4 font-medium">
                        Fecha registro
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium">
                        Hora registro
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium text-right">
                        Nombres
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium text-right">
                        Apellidos
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium text-right">
                        Cédula
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium text-right">
                        Correo
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium text-right">
                        Teléfono
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium text-right">
                        Departamento
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium text-right">
                        Ciudad
                    </th>
                    <th scope="col" class="px-2 py-4 font-medium text-right">
                        TYC
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($entities as $entity)
                    <tr class="bg-gray-900 border-b border-gray-800 hover:bg-gray-800 transition duration-200">
                        <td class="px-2 py-4 font-medium text-gray-100">
                            {{ $entity->created_at->format('d-m-Y') }}
                        </td>
                        <td class="px-2 py-4 font-medium text-gray-100">
                            {{ $entity->created_at->format('H:i:s') }}
                        </td>
                        <td class="px-2 py-4 font-medium text-gray-100">
                            {{ $entity->participant->name }}
                        </td>
                        <td class="px-2 py-4 font-medium text-gray-100">
                            {{ $entity->participant->last_name }}
                        </td>
                        <td class="px-2 py-4 font-medium text-gray-100">
                            {{ $entity->participant->document_identification }}
                        <td class="px-2 py-4 font-medium text-gray-100" title="{{ $entity->participant->email }}">
                            {{ Str::limit($entity->participant->email, 10, '...') }}
                        </td>
                        <td class="px-2 py-4 font-medium text-gray-100">
                            {{ $entity->participant->phone }}
                        </td>
                        <td class="px-2 py-4 font-medium text-gray-100">
                            {{ $entity->participant->departamento->name }}
                        </td>
                        <td class="px-2 py-4 font-medium text-gray-100">
                            {{ $entity->participant->municipio->name }}
                        </td>
                        <td class="px-2 py-4 font-medium text-gray-100">
                            @if ($entity->participant->data_authorization)
                                <span class="text-green-500 font-bold">Sí</span>
                            @else
                                <span class="text-red-500 font-bold">No</span>
                            @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
