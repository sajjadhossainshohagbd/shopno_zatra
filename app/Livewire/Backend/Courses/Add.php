<?php

namespace App\Livewire\Backend\Courses;

use App\Models\Course;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\CourseCategory;
use Livewire\Attributes\Title;
use Livewire\Attributes\Locked;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    public $course_name;
    public $category_id;
    public $course_level;
    public $price;
    public $course_duration;
    public $course_tags;
    public $short_description;
    public $description;
    public $thumbnail;
    public $preview_video_link;
    public $meta_title;
    public $meta_description;
    public $isPublished = false;
    public $slug;

    #[Locked]
    public $categories;

    public function mount()
    {
        $this->categories = CourseCategory::latest()->get();
    }

    public function updatedCourseName()
    {
        $this->slug = Str::slug($this->course_name);
    }

    public function addCourse()
    {
        $this->validate([
            'course_name' => 'required',
            'category_id' => 'required|exists:course_categories,id',
            'course_level' => 'required',
            'price' => 'required',
            'course_duration' => 'required',
            'course_tags' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|mimes:jpg,png,jpeg,webp',
            'preview_video_link' => 'required',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'isPublished' => 'boolean',
            'slug' => 'required|unique:courses,slug'
        ]);

        $course = new Course();
        $course->name = $this->course_name;
        $course->slug = $this->slug;
        $thumbnailName = $this->thumbnail->store('uploads/courses/thumbnail', 'public');
        $course->thumbnail = $thumbnailName;
        $course->course_category_id = $this->category_id;
        $course->level = $this->course_level;
        $course->price = $this->price;
        $course->duration = $this->course_duration;
        $course->short_description = $this->short_description;
        $course->description = $this->description;
        $course->tags = $this->course_tags;
        $course->video_source = 'vimeo';
        $course->video_link = $this->preview_video_link;
        $course->downloadable = false;
        $course->meta_title = $this->meta_title ?? $this->course_name;
        $course->meta_description = $this->meta_description ?? $this->short_description;
        $course->status = $this->isPublished ? 'published' : 'draft';
        $course->save();

        session()->flash('success','Course added successfully!');

        return $this->redirectRoute('courses.index');
    }

    #[Title('Add Course')]
    public function render()
    {
        return view('backend.courses.add');
    }
}
