@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="settings-widget profile-details">
                <div class="settings-menu p-0">
                    <div class="checkout-form personal-address add-course-info ">
                        <div class="personal-info-head">
                            <h4>Balance Transfer</h4>
                        </div>
                        <hr>
                        <form wire:submit='submit'>
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
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
                                                <label class="form-control-label">Receiver Account Number <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" wire:model='receiver_account_number' class="form-control @error('receiver_account_number') border-danger @enderror" placeholder="Receiver Account Number">
                                                @error('receiver_account_number')
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
                                                <label class="form-control-label">Account Type <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <select wire:model="account_type" id="account_type" class="form-select @error('account_type') border-danger @enderror">
                                                    <option value="">Select Account Type</option>
                                                    <option value="personal"> Personal Account</option>
                                                    <option value="business"> Business Account</option>
                                                </select>
                                                @error('account_type')
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
                                                <label class="form-control-label">Purpose Of Transaction</label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea wire:model='purpose' cols="10" rows="1" class="form-control " placeholder="Purpose Of Transaction..."></textarea>
                                                @error('purpose')
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
                                                <label class="form-control-label">Upload Sender Passport/ Ekama/ NID <span class="text-danger">*</span> <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='sender_document' class="form-control @error('sender_document') border-danger @enderror">
                                                @error('sender_document')
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
                                                <label class="form-control-label">Upload Receiver Passport/ Ekama/ NID <span class="text-danger">*</span> <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='receiver_document' class="form-control @error('receiver_document') border-danger @enderror">
                                                @error('receiver_document')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="update-profile">
                                        <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Submit Transfer <i class="fas fa-spinner fa-spin" wire:target='submit' wire:loading></i></button>
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
