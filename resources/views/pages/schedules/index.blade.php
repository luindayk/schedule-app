@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between"><span>Agendamentos</span><button type="button" class="btn btn-sm btn-success">Novo Agendamento</button></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('pages.schedules.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
