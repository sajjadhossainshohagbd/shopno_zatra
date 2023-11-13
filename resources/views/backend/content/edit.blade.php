
<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Edit Content</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Content</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form wire:submit='addContent'>
                <div id="accordion" class="custom-accordion">
                    <div class="card">
                        <a href="#basic-info" class="text-dark" data-bs-toggle="collapse" aria-expanded="true" aria-controls="basic-info">
                            <div class="p-4">

                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                01
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Content Details</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                    </div>

                                </div>

                            </div>
                        </a>

                        <div id="basic-info" class="collapse show" data-bs-parent="#accordion">
                            <div class="p-4 border-top">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="title">Title <small class="text text-danger">*</small></label>
                                            <input id="title" wire:model="title" type="text" class="form-control" placeholder="Enter title">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <x-select label="Courses" wire:model='course_id'>
                                                <option value="" selected>Select Course</option>
                                                @foreach ($courses as $course)
                                                <option value="{{ $course->id }}" @selected($course_id == $course->id)>{{ $course->name }}</option>
                                                @endforeach
                                            </x-select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" class="control-label">Lessons</label> <br>
                                            <select wire:model='lesson_id' id="lesson_id" class="form-select">
                                                <option value="" selected>Select Lesson</option>
                                                @foreach ($lessons as $lesson)
                                                <option value="{{ $lesson->id }}" @selected($lesson_id == $lesson->id)>{{ $lesson->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="link">Video Link <small class="text text-danger">*</small></label>
                                            <input id="link" wire:model="link" type="url" class="form-control" placeholder="Enter Video Link..">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="duration">Video Duration <small class="text text-danger">*</small></label>
                                            <b class="float-right"> Ex. 10:10 Min</b>
                                            <input id="duration" wire:model="duration" type="text" class="form-control" placeholder="Enter Video Duration..">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn btn-success" type="submit">Save</button>
            </form>
        </div>
    </div>

</div>
