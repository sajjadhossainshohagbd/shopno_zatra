<?php

namespace App\Livewire\Backend\Accounts;

use App\Models\Course as ModelsCourse;
use App\Models\CourseEnroll;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;

class Course extends Component
{
    #[Title('Course Accounts')]
    public function render()
    {

        return view('backend.accounts.course',[
            'today' => CourseEnroll::whereDate('created_at',Carbon::now())->sum('price'),
            'seven_days' => CourseEnroll::whereBetween('created_at',[Carbon::now()->subDays(7),now()->subDay()])->sum('price'),
            'thirty_days' => CourseEnroll::whereBetween('created_at',[Carbon::now()->subDays(30),now()->subDay()])->sum('price'),
            'total' => CourseEnroll::sum('price'),
            'top_ten_courses' => CourseEnroll::with('course')
                                                ->has('course')
                                                ->selectRaw('COUNT(*) as enroll_count,course_id')
                                                ->groupBy('course_id')
                                                ->havingRaw('COUNT(*) > 0')
                                                ->limit(10)
                                                ->get()
        ]);
    }
}
