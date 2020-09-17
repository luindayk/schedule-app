<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center" scope="col">Nome</th>
            <th class="text-center" scope="col">Email</th>
            <th class="text-center" scope="col">Celular</th>
            <th class="text-center" scope="col">Cadastrado em</th>
            <th class="text-center" scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
            <tr>
                <td class="text-center">{{ $patient->fullname }}</td>
                <td class="text-center">{{ $patient->email }}</td>
                <td class="text-center">{{ $patient->cellphone }}</td>
                <td class="text-center">{{ $patient->created_at->format('d/m/Y H:i:s') }}</td>
                <td class="text-center">
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <button type="button" onclick="return (confirm('Tem certeza que deseja excluir?') ? document.getElementById('form-{{ $patient->id }}').submit() : false);" class="btn btn-sm btn-danger">Excluir</button>
                    <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" id="form-{{ $patient->id }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
