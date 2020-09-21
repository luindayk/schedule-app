<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UpdateScheduleRequest;
use App\Http\Requests\Dashboard\StoreScheduleRequest;
use App\Services\ScheduleService;
use App\Services\DoctorService;
use App\Services\PatientService;
use App\DataTables\SchedulesDataTable;

class ScheduleController extends Controller
{
    protected $scheduleService, $doctorService, $patientService;

    public function __construct(
        ScheduleService $scheduleService,
        PatientService $patientService,
        DoctorService $doctorService
    )
    {
        $this->scheduleService = $scheduleService;
        $this->doctorService = $doctorService;
        $this->patientService = $patientService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SchedulesDataTable $dataTable)
    {
        return $dataTable->render('pages.schedules.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = $this->doctorService->listAll();
        $patients = $this->patientService->listAll();

        return view('pages.schedules.create')->with(compact([
            'doctors',
            'patients',
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScheduleRequest $request)
    {
        $schedule = $this->scheduleService->store();

        if (!$schedule) {

        } else {

        }

        return redirect()->route('schedules.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = $this->scheduleService->show($id);

        if (!$schedule) {
            return redirect()->route('schedules.index');
        }

        $doctors = $this->doctorService->listAll();
        $patients = $this->patientService->listAll();

        return view('pages.schedules.edit')->with(compact([
            'doctors',
            'patients',
            'schedule'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScheduleRequest $request, $id)
    {
        $schedule = $this->scheduleService->update($id);

        if (!$schedule) {

        } else {

        }

        return redirect()->route('schedules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = $this->scheduleService->destroy($id);

        if (!$schedule) {

        } else {

        }

        return redirect()->route('schedules.index');
    }
}
