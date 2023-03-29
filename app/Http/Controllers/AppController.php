<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Support\Facades\Log;
use stdClass;
use Wonde\Client;

class AppController extends Controller
{
    public function index(Client $client)
    {
        try {

            $employee = $client
                ->school(env('WONDE_SCHOOL_ID'))
                ->employees
                ->get(auth()->user()->wonde_employee_id, ['classes.lessons.period']);

            $lessonsForWeek = Employees::getLessonsForCurrentWeek($employee);

        } catch (\Exception $e) {
            if ($e->getCode() === 404) {
                session()->flash('error', 'Your Wonde Employee ID was not found. Please contact an administrator.');
            }
            else {
                session()->flash('error', 'Unable to retrieve data from the Wonde API. Please try again later or contact an administrator.');
                Log::warning('API error '.$e->getMessage());
            }

            $employee = new stdClass();
            $lessonsForWeek = [];
        }

        return view('index', [
            'employee' => $employee,
            'lessonsForWeek' => $lessonsForWeek
        ]);
    }

    public function lesson(Client $client, $lessonId)
    {

        try {

            $lesson = $client
                ->school(env('WONDE_SCHOOL_ID'))
                ->lessons
                ->get($lessonId, ['class.students', 'class.subject']);

            $class = $lesson->class->data;
            $subject = $class->subject->data;
            $students = $class->students->data;

        } catch (\Exception $e) {
            if ($e->getCode() === 404) {
                abort(404);
            }

            Log::warning('API error '.$e->getMessage());
            return redirect(route('dashboard'))
                ->with('error', 'Unable to retrieve data from the Wonde API. Please try again later or contact an administrator.');
        }

        return view('lesson', [
            'lesson' => $lesson,
            'class' => $class,
            'subject' => $subject,
            'students' => $students
        ]);
    }
}
