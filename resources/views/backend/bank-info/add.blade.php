<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Add Bank</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3">
                            <label class="form-label" for="bank_name">Bank Name <small class="text text-danger">*</small></label>
                            <input id="bank_name" wire:model="bank_name" type="text" class="form-control @error('bank_name') is-invalid @enderror" placeholder="Enter name">
                            @error('bank_name')
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
                            <label class="form-label" for="bank_address">Bank Address <small class="text text-danger">*</small></label>
                            <input id="bank_address" wire:model="bank_address" type="text" class="form-control @error('bank_address') is-invalid @enderror" placeholder="Enter bank address">
                            @error('bank_address')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="account_name">Account Name <small class="text text-danger">*</small></label>
                            <input id="account_name" wire:model="account_name" type="text" class="form-control @error('account_name') is-invalid @enderror" placeholder="Enter account name">
                            @error('account_name')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="account_number">Account Number <small class="text text-danger">*</small></label>
                            <input id="account_number" wire:model="account_number" type="text" class="form-control @error('account_number') is-invalid @enderror" placeholder="Enter account number">
                            @error('account_number')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="routing_number">Routing Number <small class="text text-danger">*</small></label>
                            <input id="routing_number" wire:model="routing_number" type="text" class="form-control @error('routing_number') is-invalid @enderror" placeholder="Enter routing number">
                            @error('routing_number')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Add Bank</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
