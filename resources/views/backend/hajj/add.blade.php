<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Package</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3">
                            <label class="form-label" for="package_name">Name <small class="text text-danger">*</small></label>
                            <input id="package_name" wire:model="form.package_name" type="text" class="form-control @error('form.package_name') is-invalid @enderror" placeholder="Enter package name">
                            @error('form.package_name')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <x-textarea label="Description" wire:model='form.description' id="description"></x-textarea>
                        </div>
                        @error('form.description')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <x-textarea label="Terms & Conditions" wire:model='form.terms_condition' id="terms_condition"></x-textarea>
                        </div>
                        @error('form.terms_condition')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label class="form-label" for="category">Category <small class="text text-danger">*</small></label>
                            <select wire:model='form.type' class="form-select @error('form.type') is-invalid @enderror" id="category">
                                <option value="" selected>Select Category</option>
                                <option value="hajj">Hajj</option>
                                <option value="umrah">Umrah</option>
                            </select>
                            @error('form.type')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="thumbnail">Thumbnail <small class="text text-danger">*</small></label>
                            <input id="thumbnail" wire:model="form.thumbnail" type="file" accept="image/jpg,image/png,image/jpeg" class="form-control @error('form.thumbnail') is-invalid @enderror" placeholder="Enter package name">
                            @error('form.thumbnail')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror

                            @if($form->thumbnail)
                            <div class="pt-2">
                                <h6>Thumbnail Preview :</h6>
                                <img src="{{ $form->thumbnail->temporaryUrl() }}" alt="Preview" class="img-thumbnail">
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="start_from">Start From <small class="text text-danger">*</small></label>
                            <input id="start_from" wire:model="form.start_from" type="number" class="form-control @error('form.start_from') is-invalid @enderror" placeholder="Enter start from">
                            @error('form.start_from')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Add Package</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
