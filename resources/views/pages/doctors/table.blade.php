<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center" scope="col">Nome</th>
            <th class="text-center" scope="col">Crm</th>
            <th class="text-center" scope="col">Celular</th>
            <th class="text-center" scope="col">Especialidade</th>
            <th class="text-center" scope="col">Cadastrado em</th>
            <th class="text-center" scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($doctors as $doctor)
            <tr>
                <td class="text-center">{{ $doctor->fullname }}</td>
                <td class="text-center">{{ $doctor->crm }}</td>
                <td class="text-center">{{ $doctor->cellphone }}</td>
                <td class="text-center">{{ $doctor->specialty }}</td>
                <td class="text-center">{{ $doctor->created_at->format('d/m/Y H:i:s') }}</td>
                <td class="text-center">
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <button type="button" onclick="return (confirm('Tem certeza que deseja excluir?') ? document.getElementById('form-{{ $doctor->id }}').submit() : false);" class="btn btn-sm btn-danger">Excluir</button>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" id="form-{{ $doctor->id }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
