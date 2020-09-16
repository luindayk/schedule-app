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
        @foreach ($schedules as $schedule)
            <tr>
                <td class="text-center">{{ $user->name }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">{{ $user->created_at->format('d/m/Y H:i:s') }}</td>
                <td class="text-center">
                    <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <button form="#form-destroy-{{ $scheduling->id }}" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn btn-sm btn-danger">Excluir</button>
                    <form style="display:none;" action="{{ route('schedules.destroy', $schedule->id) }}" method="post" id="form-destroy-{{ $scheduling->id }}">
                        @csrf
                        <input name="_method"
                                type="hidden"
                                value="DELETE">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
