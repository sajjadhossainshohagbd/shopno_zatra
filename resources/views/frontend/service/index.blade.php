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
                            <h2>{{ ucwords(str_replace('_',' ',$type)) }} Services</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($services as $service)
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('services.details',$service->id) }}">
                                    <img src="{{ $service->show_thumbnail }}" alt="{{ $service->name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('services.details',$service->id) }}"><h4>{{ $service->name }}</h4></a>
                                <p>
                                    {{ Str::words(strip_tags($service->description), 50, '...') }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
