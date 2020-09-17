<div class="form-group row">
    <label for="patient_id" class="col-md-4 col-form-label text-md-right">{{ __('Patient') }}</label>
    <div class="col-md-6">
        <select name="patient_id" id="patient_id" class="form-control">
            @foreach ($patients as $patient)
                <option value="{{ $patient->id }}" {{ $patient->id == $schedule->patient_id ? 'selected="selected"' : '' }}>{{ $patient->fullname }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="doctor_id" class="col-md-4 col-form-label text-md-right">{{ __('Doctor') }}</label>
    <div class="col-md-6">
        <select name="doctor_id" id="doctor_id" class="form-control">
            @foreach ($doctors as $doctor)
                <option value="{{ $doctor->id }}" {{ $doctor->id == $schedule->doctor_id ? 'selected="selected"' : '' }}>{{ $doctor->fullname }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="schedule" class="col-md-4 col-form-label text-md-right">{{ __('Born At') }}</label>

    <div class="col-md-6">
        <input id="schedule" type="datetime-local" class="form-control @error('schedule') is-invalid @enderror" name="schedule" value="{{ !empty($schedule) ? $schedule->schedule->format('Y-m-d\TH:i:s') : old('schedule') }}" />

        @error('schedule')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
    </div>
</div>
