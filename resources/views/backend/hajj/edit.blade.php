<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Package</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3">
                            <label class="form-label" for="package_name">Name <small class="text text-danger">*</small></label>
                            <input id="package_name" wire:model="package_name" type="text" class="form-control @error('package_name') is-invalid @enderror" placeholder="Enter package name">
                            @error('package_name')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <x-textarea label="Description" wire:model='description' id="description"></x-textarea>
                        </div>
                        @error('description')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <x-textarea label="Terms & Conditions" wire:model='terms_condition' id="terms_condition"></x-textarea>
                        </div>
                        @error('terms_condition')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label class="form-label" for="category">Category <small class="text text-danger">*</small></label>
                            <select wire:model='type' class="form-select @error('type') is-invalid @enderror" id="category">
                                <option value="" selected >Select Category</option>
                                <option value="hajj">Hajj</option>
                                <option value="umrah">Umrah</option>
                            </select>
                            @error('type')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="thumbnail">Thumbnail <small class="text text-danger">*</small></label>
                            <input id="thumbnail" wire:model="thumbnail" type="file" accept="image/jpg,image/png,image/jpeg" class="form-control @error('thumbnail') is-invalid @enderror" placeholder="Enter package name">
                            @error('thumbnail')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="start_from">Start From <small class="text text-danger">*</small></label>
                            <input id="start_from" wire:model="start_from" type="number" class="form-control @error('start_from') is-invalid @enderror" placeholder="Enter start from">
                            @error('start_from')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Update Package</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
