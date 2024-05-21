<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkSchedule;
use App\Models\Employee;
use Carbon\Carbon;

class WorkScheduleController extends Controller
{
    public function index()
    {
        $schedules = WorkSchedule::with('employee')->get();
        return view('work_schedules.index', compact('schedules'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('work_schedules.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $data = $this->generateWorkSchedule($request->employee_id);
        WorkSchedule::insert($data);
        return redirect()->route('work-schedules.index')->with('message', 'Work schedule created');
    }

    private function generateWorkSchedule($employeeId)
    {
        $workHours = [
            ['start' => 9, 'end' => 12],
            ['start' => 13, 'end' => 18]
        ];
    
        $schedules = [];
        $startDate = Carbon::now();
        $endDate = Carbon::now()->addDays(30);
    
        for ($date = $startDate; $date->lessThan($endDate); $date->addDay()) {
            foreach ($workHours as $session) {
                for ($hour = $session['start']; $hour < $session['end']; $hour++) {
                    $startTime = $date->copy()->setTime($hour, 0);
                    $endTime = $startTime->copy()->addHour();
                    $schedules[] = [
                        'employee_id' => $employeeId,
                        'start_time' => $startTime,
                        'end_time' => $endTime,
                        'date' => $date->toDateString(),
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
            }
        }
    
        return $schedules;
    }
    
}
