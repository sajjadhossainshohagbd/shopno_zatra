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
                            <h2>{{ $service->name }}</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ $service->show_thumbnail }}" alt="Thumbnail" class="img-thumbnail img-fluid"><br>
                            <b class="p-2"><h3>Price : <b>{{ round($service->price) }} BDT</b></h3></b>
                        </div>

                        <h4 class="text-center bg-app p-2 text-white">Service Description</h4>
                        <p class="text-justify p-2">
                            {!! $service->description !!}
                        </p>
                        <h4 class="text-center bg-app p-2 text-white">Terms & Conditions</h4>
                        <p class="text-justify p-2">
                            {!! $service->terms_condition !!}
                        </p>
                        <hr>
                        <div class="text-center">
                            @error('terms_condition')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <form wire:submit='buyNow'>
                                <label class="@error('terms_condition') is-invalid @enderror">
                                    <input type="checkbox" class="form-check-input" wire:model='terms_condition'>
                                    I agree with terms & conditions.
                                </label>
                                <br>

                                @if(auth()->check() && auth()->user()->role == 'agent')
                                <button type="button" class="btn btn-lg btn-secondary m-3" disabled>Agent Can't Order!</button>
                                @else
                                <button class="btn btn-lg btn-success bg-app m-3" wire:loading.attr='disabled'>Order Now <i wire:loading class="fas fa-spinner fa-spin"></i></button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
