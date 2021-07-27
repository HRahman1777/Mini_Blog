<div>
    @section('title', 'Profile | Mini Blog')
    <div class="mt-2 mb-2">
        <div class="row">
            <div class="col-4">

                <div class="card p-1" style="width: 18rem;">
                    <img src="{{ asset('asset/images/default.JPG') }}" class="card-img-top circle" alt="">
                    <div class="card-body text-center btn-outline-dark">
                        <h3 class="card-title">{{ $u->name }}</h3>
                        <p class="card-text"><b>Email:</b> {{ $u->email }}</p>
                        <p class="card-text"><b>Total Follwers:</b> 00</p>
                    </div>
                    <p class="card-body text-center">
                        <a href="{{ route('profile.show') }}" class="btn btn-outline-dark btn-sm">Edit Profile</a>
                    </p>
                </div>

            </div>
            <div class="col-8">

                @foreach($p as $p)
                <div class="mt-1 mb-2 text-center">
                    <div class="card">
                        <div class="card-header">
                            <h4><b>{{ $p->title }}</b></h4>
                        </div>
                        <img src="{{ asset('asset/images/default.JPG') }}" class="card-img-top" style="max-width: 22rem;" alt="default image">
                        <div class="card-body">
                            <p class="card-text c-t">
                                {{ $p->description }}
                            </p>
                        </div>
                        <div class=" card-footer text-center text-muted">
                            <a href="{{ route('usr.spost', ['pid' => $p->id]) }}" class="btn btn-sm btn-outline-dark">View</a>
                            <a href="#" class="btn btn-sm btn-outline-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>