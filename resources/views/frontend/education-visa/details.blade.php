<div>
    <div class="container ">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="card-header">
                        <div class="card-title">
                            <h2>{{ $education->name }}</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ $education->show_thumbnail }}" alt="Thumbnail" class="img-thumbnail img-fluid"><br>
                            <b class="p-2"><h3>Price : <b>{{ round($education->price) }} BDT</b></h3></b>
                        </div>

                        <h4 class="text-center bg-app p-2 text-white">Package Description</h4>
                        <div class="text-justify p-2">
                            {!! $education->description !!}
                        </div>
                        <h4 class="text-center bg-app p-2 text-white">Terms & Conditions</h4>
                        <div class="text-justify p-2">
                            {!! $education->terms_condition !!}
                        </div>
                        <hr>
                        <div class="text-center">
                            @error('terms_condition')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <form wire:submit='applyNow'>
                                <label class="@error('terms_condition') is-invalid @enderror">
                                    <input type="checkbox" class="form-check-input" wire:model='terms_condition'>
                                    I agree with terms & conditions.
                                </label>
                                <br>

                                <button class="btn btn-lg btn-success bg-app m-3" wire:loading.attr='disabled'>Apply Now <i wire:loading class="fas fa-spinner fa-spin"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
