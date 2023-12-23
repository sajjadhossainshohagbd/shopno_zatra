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
                            <label class="form-label" for="name">Name <small class="text text-danger">*</small></label>
                            <input id="name" wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name">
                            @error('name')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="category">Category <small class="text text-danger">*</small></label>
                            <input id="category" wire:model="category" type="text" class="form-control @error('category') is-invalid @enderror" placeholder="Enter category">
                            @error('category')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="country">Country <small class="text text-danger">*</small></label>
                            <input id="country" wire:model="country" type="text" class="form-control @error('country') is-invalid @enderror" placeholder="Enter country">
                            @error('country')
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
                            <label class="form-label" for="process_days">Process Days <small class="text text-danger">*</small></label>
                            <input id="process_days" wire:model="process_days" type="number" class="form-control @error('process_days') is-invalid @enderror" placeholder="Enter process days">
                            @error('process_days')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">Price <small class="text text-danger">*</small></label>
                            <input id="price" wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price">
                            @error('price')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="b2b_price">B2B Price <small class="text text-danger">*</small></label>
                            <input id="b2b_price" wire:model="b2b_price" type="number" class="form-control @error('b2b_price') is-invalid @enderror" placeholder="Enter b2b price">
                            @error('b2b_price')
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
