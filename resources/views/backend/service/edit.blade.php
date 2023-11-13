<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Update Service</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3">
                            <label class="form-label" for="name">Name <small class="text text-danger">*</small></label>
                            <input id="name" wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                            @error('name')
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
                            <label class="form-label" for="thumbnail">Thumbnail <small class="text text-danger">*</small></label>
                            <input id="thumbnail" wire:model="thumbnail" type="file" accept="image/jpg,image/png,image/jpeg" class="form-control @error('thumbnail') is-invalid @enderror" placeholder="Enter package name">
                            @error('thumbnail')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror

                            @if($thumbnail)
                            <div class="pt-2">
                                <h6>Thumbnail Preview :</h6>
                                <img src="{{ $thumbnail->temporaryUrl() }}" alt="Preview" class="img-thumbnail">
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="price">Price <small class="text text-danger">*</small></label>
                            <input id="price" wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price">
                            @error('price')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Update Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
