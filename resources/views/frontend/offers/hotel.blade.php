<div>
    <div class="container ">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Hotel Offers</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($offers as $offer)
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('hotel.details',$offer->id) }}">
                                    <img src="{{ $offer->show_thumbnail }}" alt="{{ $offer->name }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('hotel.details',$offer->id) }}"><h4>{{ $offer->name }}</h4></a> <br>
                                <p>
                                    {{ Str::words(strip_tags($offer->description), 50, '...') }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        {{ $offers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
