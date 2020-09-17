<div class="form-group row">
    <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ !empty($patient) ? $patient->fullname : old('fullname') }}" required autocomplete="fullname" autofocus>

        @error('fullname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ !empty($patient) ? $patient->email : old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="cellphone" class="col-md-4 col-form-label text-md-right">{{ __('Cellphone') }}</label>

    <div class="col-md-6">
        <input id="cellphone" type="text" class="form-control @error('cellphone') is-invalid @enderror" name="cellphone" value="{{ !empty($patient) ? $patient->cellphone : old('cellphone') }}" required>

        @error('cellphone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

    <div class="col-md-6">
        <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ !empty($patient) ? $patient->cpf : old('cpf') }}" required autocomplete="cpf">

        @error('cpf')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="born_at" class="col-md-4 col-form-label text-md-right">{{ __('Born At') }}</label>

    <div class="col-md-6">
        <input id="born_at" type="date" class="form-control @error('born_at') is-invalid @enderror" name="born_at" value="{{ !empty($patient) ? $patient->born_at : old('born_at') }}" />

        @error('born_at')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>
    @php
        $sex = '';
        if (!empty($patient)) {
            $sex = $patient->sex;
        } elseif (old('sex')) {
            $sex = old('sex');
        }
    @endphp
    <div class="col-md-6">
        <select name="sex" id="sex" class="form-control">
            <option value="M" {{ $sex == "M" ? 'selected="selected"' : '' }}>Masculino</option>
            <option value="F" {{ $sex == "F" ? 'selected="selected"' : '' }}>Feminino</option>
        </select>
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
