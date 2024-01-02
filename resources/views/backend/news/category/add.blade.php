
<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Category</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3">
                            <label class="form-label" for="name">Category Name <small class="text text-danger">*</small></label>
                            <input id="name" wire:model.live="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                            @error('name')
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

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
