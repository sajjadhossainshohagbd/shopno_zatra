@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="settings-widget profile-details">
                <div class="settings-menu p-0">
                    <div class="checkout-form personal-address add-course-info ">
                        <div class="personal-info-head">
                            <h4>Korea Deposit Request</h4>
                        </div>
                        <hr>
                        <form wire:submit='submit'>
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-10 mx-auto">
                                    <div class="form-group">
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
                                    <div class="form-group">
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
                                    <div class="form-group">
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
                                    <div class="form-group">
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
                                    <div class="form-group">
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

                                    <div class="form-group">
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

                                    <div class="form-group">
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
    </div>
</div>
