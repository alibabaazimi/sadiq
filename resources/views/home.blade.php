@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header">
            <div class="card-title">Catagories</div>
            </div>
            <div class="card-body">


                <ul class="nav flex-column">

                @php
                    $categories = json_decode($categories);
                @endphp

                    <!-- Level two dropdown-->
                    <li class="dropdown-submenu dropdown-hover">
                        <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Electronics</a>
                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                        <li>
                            <a tabindex="-1" href="/categroy/pc_and_laptops" class="dropdown-item">PC & Laptops</a>
                        </li>

                        <!-- Level three dropdown-->
                        <li class="dropdown-submenu">
                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Mobile</a>
                            <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                            <li><a href="#" class="dropdown-item">iPhone</a></li>
                            <li><a href="#" class="dropdown-item">Samsung</a></li>
                            </ul>
                        </li>
                        <!-- End Level three -->

                        <li><a href="#" class="dropdown-item">TV</a></li>
                        </ul>
                    </li>
                    <!-- End Level two -->

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Land</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vehicles</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/900x200/39CCCC/ffffff&amp;text=Your+Advertisements+Here" alt="First slide">
                </div>
                <div class="carousel-item active">
                <img class="d-block w-100" src="https://placehold.it/900x200/3c8dbc/ffffff&amp;text=Browse+Best+Products" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/900x200/f39c12/ffffff&amp;text=Sell+Your+Products" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
        <h3>All posts:</h3>
        <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card card-widget">
                    <div class="card-body" style="display: block;">
                        <a href="{{ route('show_post', [$post->id]) }}" class="text-dark">
                            <img class="img-fluid pad" src="{{ $post->image ? asset('storage/'.$post->image->path) : asset('/profile-default.jpg') }}" alt="Photo">
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->desc }}</p>
                        </a>
                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                        <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                        <a href="{{ route('show_post', [$post->id]) }}">
                        <span class="float-right text-muted">{{ $post->likes->count() }} likes - {{ $post->comments->count() }} comments</span>
                        </a>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div> 
        @endforeach
        </div>
    </div>
    <div class="col-md-2">
        <div class="card">
            <div class="card-body">
                Advertisements
            </div>
        </div>
    </div>
</div>
@endsection