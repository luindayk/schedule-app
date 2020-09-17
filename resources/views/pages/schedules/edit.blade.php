@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span>Editar Agendamento</span>
                    <a href="{{ route('schedules.index') }}" class="btn btn-sm btn-outline-dark">Voltar</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('schedules.update', $schedule->id) }}">
                        <input name="_method" type="hidden" value="PATCH">
                        <input type="hidden" name="id" value="{{ $schedule->id }}" />
                        @csrf
                        @include('pages.schedules.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
