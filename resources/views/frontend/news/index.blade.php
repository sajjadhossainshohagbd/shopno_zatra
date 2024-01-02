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
                            <h2>News Media</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($posts as $post)
                            <div class="col-md-4 col-sm-4 mb-2">
                                <a href="{{ route('news.media.details',$post->slug) }}">
                                    <img src="{{ $post->show_thumbnail }}" alt="{{ $post->title }}" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="{{ route('news.media.details',$post->slug) }}"><h4>{{ $post->title }}</h4></a> <br>
                                <div class="badge bg-success">{{ $post->category?->name }}</div>
                                <p>
                                    {{ Str::words(strip_tags($post->description), 50, '...') }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
