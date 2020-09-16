<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center" scope="col">Nome</th>
            <th class="text-center" scope="col">Email</th>
            <th class="text-center" scope="col">Criado em</th>
            <th class="text-center" scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
            <tr>
                <td class="text-center">{{ $user->name }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
                <td class="text-center">
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <a type="button" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
