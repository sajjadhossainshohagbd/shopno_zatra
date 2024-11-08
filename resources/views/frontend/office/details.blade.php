<div>
    @push('css')
    <style>
        .address img{
            width: 80%;
            height: 50%;
        }
    </style>
    @endpush
    <div class="container ">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">

                    <div class="card-header">
                        <div class="card-title">
                            <h2>Office Address</h2>
                        </div>
                    </div>
                    <div class="card-body address">
                        <h3>{{ $office->title }}</h3> <br>
                        <p>
                            {!! $office->address !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
