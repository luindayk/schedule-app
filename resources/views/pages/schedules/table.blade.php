<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center" scope="col">Paciente</th>
            <th class="text-center" scope="col">Médico</th>
            <th class="text-center" scope="col">Data Consulta</th>
            <th class="text-center" scope="col">Agendado em</th>
            <th class="text-center" scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($schedules as $schedule)
            <tr>
                <td class="text-center">{{ $schedule->patient->fullname }}</td>
                <td class="text-center">{{ $schedule->doctor->fullname }}</td>
                <td class="text-center">{{ $schedule->schedule->format('d/m/Y H:i') }}</td>
                <td class="text-center">{{ $schedule->created_at->format('d/m/Y H:i:s') }}</td>
                <td class="text-center">
                    <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    <button form="#form-destroy-{{ $schedule->id }}" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn btn-sm btn-danger">Excluir</button>
                    <form style="display:none;" action="{{ route('schedules.destroy', $schedule->id) }}" method="post" id="form-destroy-{{ $schedule->id }}">
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
