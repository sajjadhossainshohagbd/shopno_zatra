<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Office</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3">
                            <label class="form-label" for="title">Title <small class="text text-danger">*</small></label>
                            <input id="title" wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title">
                            @error('title')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <x-textarea label="Address" wire:model='address' id="address"></x-textarea>
                        </div>
                        @error('address')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label" for="type">Type <small class="text text-danger">*</small></label>
                            <select wire:model="type" id="type" class="form-select">
                                <option value="" selected>Select Type</option>
                                <option value="bangladesh">Bangladesh</option>
                                <option value="abroad">Abroad</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Add Office</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
