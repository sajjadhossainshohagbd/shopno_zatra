<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Update Page</div>
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
                            <x-textarea label="Description" wire:model='description' id="description"></x-textarea>
                        </div>
                        @error('description')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Update Page</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
