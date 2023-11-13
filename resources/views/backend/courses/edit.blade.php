<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Edit Course</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Course</li>
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
            <form wire:submit='saveCourse'>
                <div id="course-accordion" class="custom-accordion">
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
                                        <h5 class="font-size-16 mb-1">Basic Info</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                    </div>

                                </div>

                            </div>
                        </a>

                        <div id="basic-info" class="collapse show" data-bs-parent="#course-accordion">
                            <div class="p-4 border-top">
                                <div class="mb-3">
                                    <label class="form-label" for="course_name">Course Name <small class="text text-danger">*</small></label>
                                    <input id="course_name" wire:model.live="course_name" type="text" class="form-control" placeholder="Enter Course Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="slug">Course Slug <small class="text text-danger">*</small></label>
                                    <input id="slug" wire:model="slug" type="text" class="form-control" placeholder="Enter Course Slug">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <x-select label="Categories" wire:model='category_id'>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @selected($category_id == $category->id)>{{ $category->name }}</option>
                                                @endforeach
                                            </x-select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <x-select label="Course Level" wire:model='course_level'>
                                                <option value="beginner" @selected($course_level == 'beginner')>Beginner</option>
                                                <option value="intermediate" @selected($course_level == 'intermediate')>Intermediate</option>
                                                <option value="advanced" @selected($course_level == 'advanced')>Advanced</option>
                                            </x-select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="price">Price <small class="text text-danger">*</small> <small class="text text-info">(Example : 72 Hours)</small></label>
                                            <input id="price" wire:model="price" type="number" class="form-control" placeholder="Enter Course Price">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="course_duration">Course Duration <small class="text text-danger">*</small> <small class="text text-info">(Example : 72 Hours)</small></label>
                                            <input id="course_duration" wire:model="course_duration" type="text" class="form-control" placeholder="Enter Course Duration">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <x-tags label="Course Tags" wire:model='course_tags' value="{{ $course_tags }}"></x-tags>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="short_description">Short Description <small class="text text-danger">*</small></label>
                                    <textarea class="form-control" id="short_description" wire:model="short_description"   rows="4" placeholder="Enter Short Description"></textarea>
                                </div>

                                <div class="mb-3">
                                    <x-textarea label="Description" placeholder="Enter Description" wire:model='description' rows="3"></x-textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#course-source" class="text-dark" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="course-source">
                            <div class="p-4">

                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                02
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Course Sources</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                    </div>

                                </div>

                            </div>
                        </a>

                        <div id="course-source" class="collapse show" data-bs-parent="#course-accordion">
                            <div class="p-4 border-top">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="thumbnail">Thumbnail <small class="text text-danger">*</small></label>
                                            <input id="thumbnail" wire:model="thumbnail" type="file" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="preview_video_link">Preview Video Link <small class="text text-danger">*</small></label>
                                            <input id="preview_video_link" wire:model="preview_video_link" type="url" class="form-control" placeholder="Preview Video Link">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <a href="#course-metadata" class="text-dark  collapsed" data-bs-toggle="collapse" aria-haspopup="true" aria-expanded="false" aria-haspopup="true" aria-controls="course-metadata">
                            <div class="p-4">

                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                            <div class="avatar-title rounded-circle bg-primary-subtle text-primary">
                                                03
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-16 mb-1">Meta Data</h5>
                                        <p class="text-muted text-truncate mb-0">Fill all information below</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                    </div>

                                </div>

                            </div>
                        </a>

                        <div id="course-metadata" class="collapse show" data-bs-parent="#course-accordion">
                            <div class="p-4 border-top">
                                <div class="mb-3">
                                    <label class="form-label" for="meta_title">Meta title</label>
                                    <input id="meta_title" wire:model="meta_title" type="text" class="form-control" placeholder="Enter your Meta title">
                                </div>

                                <div class="mb-0">
                                    <label class="form-label" for="meta_description">Meta Description</label>
                                    <textarea class="form-control" wire:model='meta_description' id="meta_description" rows="4" placeholder="Enter your Meta Description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-white">
                    <div class="mb-2">
                        <input type="checkbox" wire:model="isPublished" id="isPublished" class="form-check-input">
                        <label for="isPublished" class="form-check-label">is Publish?</label>
                    </div>
                    <button class="btn btn-success" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
