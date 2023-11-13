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
                            <button class="btn btn-success bg-app m-3" wire:click='buyNow' wire:confirm='Are you sure to purchase this item?' wire:target='buyNow' wire:loading.attr='disabled'>Buy Now <i wire:loading class="fas fa-spinner fa-spin"></i></button>
                        </div>

                        <h4 class="text-center bg-app p-2 text-white">Service Description</h4>
                        <p class="text-justify p-2">
                            {!! $service->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
