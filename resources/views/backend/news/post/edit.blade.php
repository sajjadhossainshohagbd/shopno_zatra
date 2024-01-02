
<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Update Post</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3">
                            <label class="form-label" for="title">Title <small class="text text-danger">*</small></label>
                            <input id="title" wire:model.live="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title">
                            @error('title')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="slug">Slug <small class="text text-danger">*</small></label>
                            <input id="slug" wire:model="slug" type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Enter slug">
                            @error('slug')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="category_id">Category <small class="text text-danger">*</small></label>
                            <select wire:model="category_id" id="category_id" class="form-select">
                                <option value="" selected>Select Category</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="thumbnail"> Thumbnail <small class="text text-danger">*</small></label>
                            <input id="thumbnail" wire:model="thumbnail" type="file" class="form-control">
                            @error('thumbnail')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <x-textarea label="Description" wire:model='description' id="description"></x-textarea>
                            @error('description')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Update Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
