<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add {{ $type }} Cost</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3">
                            <label class="form-label" for="date">Date <small class="text text-danger">*</small></label>
                            <input id="date" wire:model="date" type="date" class="form-control @error('date') is-invalid @enderror" placeholder="Enter date">
                            @error('date')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="progress_description">Progress Description <small class="text text-danger">(Optional)</small></label>
                            <textarea id="progress_description" wire:model="progress_description" class="form-control @error('progress_description') is-invalid @enderror" rows="10" placeholder="Enter work progress description"></textarea>
                            @error('progress_description')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="amount">Amount <small class="text text-danger">*</small></label>
                            <input id="amount" wire:model="amount" type="number" class="form-control @error('amount') is-invalid @enderror" placeholder="Enter amount">
                            @error('amount')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
