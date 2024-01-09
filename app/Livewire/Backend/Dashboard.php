<?php

namespace App\Livewire\Backend;

use App\Models\Hajj;
use App\Models\Post;
use App\Models\Course;
use App\Models\Holiday;
use App\Models\Tourist;
use Livewire\Component;
use App\Models\WorkVisa;
use App\Models\MedicalVisa;
use App\Models\EducationVisa;
use App\Models\Hotel;
use App\Models\Ticket;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title('Dashboard')]
    public function render()
    {
        return view('backend.dashboard',[
            'ticket_count' => Ticket::count(),
            'hotel_count' => Hotel::count(),
            'course_count' => Course::count(),
            'hajj_count' => Hajj::count(),
            'work_visa_count' => WorkVisa::count(),
            'tourist_visa_count' => Tourist::count(),
            'education_visa_count' => EducationVisa::count(),
            'medical_visa_count' => MedicalVisa::count(),
            'holilday_pack_count' => Holiday::count(),
            'posts_count' => Post::count(),
        ]);
    }
}
