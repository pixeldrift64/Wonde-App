<?php
namespace App;

class Employees {

    public static function getLessonsForCurrentWeek($employee): array
    {
        $classes = $employee->classes->data;

        $lessonsData = [
            "monday" => [],
            "tuesday" => [],
            "wednesday" => [],
            "thursday" => [],
            "friday" => []
        ];

        foreach ($classes as $class) {
            foreach ($class->lessons->data as $lesson) {
                if ($lesson->employee != auth()->user()->wonde_employee_id) {
                    continue;
                }

                $lesson->class = $class;
                $lessonsData[$lesson->period->data->day][$lesson->start_at->date] = $lesson;
            }
        }

        return $lessonsData;
    }
}
