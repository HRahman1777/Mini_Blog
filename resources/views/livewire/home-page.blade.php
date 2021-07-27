<div>
    @section('title', 'Home | Mini Blog')

    <div class="mt-1">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img class="citem" src="{{ asset('asset/images/default_t.JPG') }}" alt="">
            </div>
            <div class="item">
                <img class="citem" src="{{ asset('asset/images/default_th.JPG') }}" alt="">
            </div>
            <div class="">
                <img class="citem" src="{{ asset('asset/images/default_f.JPG') }}" alt="">
            </div>
            <div class="item">
                <img class="citem" src="{{ asset('asset/images/default_fi.JPG') }}" alt="">
            </div>
        </div>
    </div>

    <div class="postdiv mt-1 mb-2">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">

            @foreach($allpost as $p)
            <div class="col mb-2">
                <div class="card" style="width: 20rem;">
                    <div class="card-header">
                        <h5>
                            @foreach ($cat as $c)
                            @if ($p->category_id == $c->id)
                            <a href="{{ route('post.category') }}" style="text-decoration: none;">{{ $c->name }}</a> - Blog
                            @endif
                            @endforeach
                        </h5>
                    </div>
                    <img src="{{ asset('asset/images/default.JPG') }}" class="card-img-top" alt="default image">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $p->title }}</h5>
                        <p class="card-text c-t">
                            {{ $p->description }}
                        </p>
                        <a href="{{ route('usr.spost', ['pid' => $p->id]) }}" class="btn btn-outline-dark">View</a>
                    </div>
                    <div class="card-footer text-center text-muted">
                        <p>{{ $p->published_at }} by <a style="text-decoration: none;" href="{{ route('usr.profile', ['pro_id' => $p->user_id]) }}">{{ $p->user_name }}</a></p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('all.posts') }}" class="btn btn-outline-dark">See More</a>
    </div>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

</div>