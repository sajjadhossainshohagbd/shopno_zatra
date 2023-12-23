<div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Create Balance Request</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ config('app.name') }}</a></li>
                            <li class="breadcrumb-item active">Create Balance Request</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form wire:submit='submit'>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Country <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <select wire:change='searchBank($event.target.value)' id="country" class="form-select @error('country') border-danger @enderror">
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                            @endforeach
                                        </select>

                                        @error('country')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Bank <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <select wire:model="bank" id="bank" class="form-select @error('bank') border-danger @enderror" wire:target='searchBank' wire:loading.attr='disabled'>
                                            <option value="">Select Bank</option>
                                            @foreach ($banks as $bank)
                                            <option value="{{ $bank->id }}">{{ $bank->bank_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('bank')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Method <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <select wire:model="method" id="method" class="form-select @error('method') border-danger @enderror">
                                            <option value="">Select Method</option>
                                            <option value="transfer"> Bank Transfer</option>
                                        </select>
                                        @error('method')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Amount <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" wire:model='amount' class="form-control @error('amount') border-danger @enderror" placeholder="Amount">
                                        @error('amount')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Date Of Payment <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" wire:model='date_of_payment' class="form-control @error('date_of_payment') border-danger @enderror">
                                        @error('date_of_payment')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Upload Your Voucher <span class="text-danger">*</span> <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" wire:model='voucher' class="form-control @error('voucher') border-danger @enderror">
                                        @error('voucher')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Bank Ref. No / Transaction ID <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" wire:model='transaction_id' class="form-control @error('transaction_id') border-danger @enderror" placeholder="Transaction ID">
                                        @error('transaction_id')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Message/Instruction</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea wire:model='message' cols="30" rows="1" class="form-control " placeholder="Message..."></textarea>
                                        @error('message')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Upload Add Balance Requested Person NID/ Passport/ Ekama ID <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" wire:model='document' class="form-control @error('document') border-danger @enderror">
                                        @error('document')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="update-profile">
                                <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Send Request <i class="fas fa-spinner fa-spin" wire:target='submit' wire:loading></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
