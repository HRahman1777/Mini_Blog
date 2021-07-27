<div>
    @section('title', 'blog | Mini Blog')
    <div class="mt-2 mb-2">

        <h1>{{ $post->title }}</h1>
        <h6 class="text-muted"><i>Posted on {{ $post->published_at }} by <a style="text-decoration: none;" href="{{ route('usr.profile', ['pro_id' => $post->user_id]) }}">{{ $post->user_name }}</a> </i>
            / Blog-
            @foreach ($cat as $c)
            @if ($post->category_id == $c->id)
            <a href="{{ route('post.category') }}" style="text-decoration: none;">{{ $c->name }}</a>
            @endif
            @endforeach
        </h6>
        <figure class="mb-4"><img src="{{ asset('asset/images/default.JPG') }}" alt="{{ $post->title }}" class="img-fluid rounded"></figure>

        <section class="mb-5">
            <p class="fs-5 mb-4">{{ $post->description }}</p>
        </section>
    </div>

</div>