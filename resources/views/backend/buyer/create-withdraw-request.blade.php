
<div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Create Withdraw Request</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{ config('app.name') }}</a></li>
                            <li class="breadcrumb-item active">Create Withdraw Request</li>
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

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-10 mx-auto">

                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-control-label">Bank <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <select wire:model="bank" id="bank" class="form-select @error('bank') border-danger @enderror" wire:target='searchBank' wire:loading.attr='disabled'>
                                            <option value="">Select Bank</option>
                                            @foreach ($banks as $bank)
                                            <option value="{{ $bank->id }}">{{ $bank->name }} - {{ $bank->account_number }}</option>
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

                            <div class="update-profile">
                                <button type="submit" wire:confirm='Are you sure?' class="btn btn-primary" wire:loading.attr='disabled'>Submit <i class="fas fa-spinner fa-spin" wire:target='submit' wire:loading></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
