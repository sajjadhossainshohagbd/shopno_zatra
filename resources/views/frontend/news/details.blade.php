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
                            <h2>{{ $post->title }}</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-justify p-2">
                            {!! $post->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
