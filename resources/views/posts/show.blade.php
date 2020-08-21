@extends('layouts.app')


@section('content')

<div class="card card-solid col-md-8">
    <div class="card-body">
        <div class="row">
        <div class="col-12 col-sm-6">
            <h3 class="d-inline-block d-sm-none">{{ $post->title }}</h3>
            <div class="col-12">
            <img src="{{ asset('storage/'.$post->image->path) }}" class="product-image" alt="Product Image">
            </div>
            <div class="col-md-4 mt-2">
                <a href="{{ route('post_like', ['post' => $post->id]) }}" class=" btn-sm"><i class="far fa-thumbs-up"></i> {{ $post->likes->count() }} Likes</a>
            </div>
            
            <div class="mt-4 product-share col">
                <a href="#" class="text-gray">
                    <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                    <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                    <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                    <i class="fas fa-rss-square fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <h3 class="my-3">{{ $post->title }}</h3>
            <p>{{ $post->desc }}</p>

            <hr>

            <div class="bg-gray py-2 px-3 mt-4">
            <h2 class="mb-0">
                ${{ $post->price }}
            </h2>
            <h4 class="mt-0">
                <small>Tax: ${{ $post->price*1/10 }} </small>
            </h4>
            </div>

            <div class="mt-4">
            <div class="btn btn-primary btn-lg btn-flat">
                <i class="fas fa-cart-plus fa-lg mr-2"></i> 
                Order
            </div>

            <div class="btn btn-default btn-lg btn-flat">
                <i class="fas fa-heart fa-lg mr-2"></i> 
                Add to Wishlist
            </div>
            </div>



        </div>
        </div>
        <div class="row mt-4">
                
                <div class="card-footer card-comments col-md-12">
                   <h5>{{ $post->comments->count() }} comments</h5>
                    @foreach($post->comments as $comment)
                    <div class="card-comment ">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="{{ asset($comment->user->profile()) }}" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                            {{ $comment->user->name }}
                            <span class="text-muted float-right">{{ $comment->updated_at->diffForHumans() }}</span>
                            </span><!-- /.username -->
                            {{ $comment->text }}
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.card-comment -->
                    @endforeach

                    <div class="mt-3">
                    @if (Auth::check())
                        <form action="{{ route('add_comment', ['post' => $post->id]) }}" method="post">
                        @csrf
                        <img class="img-fluid img-circle img-sm" src="{{ asset(auth()->user()->profile()) }}" alt="Alt Text">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class="img-push">
                            <input type="text" class="form-control form-control-sm" name="comment" placeholder="Press enter to post comment">
                        </div>
                        </form>
                    @else
                    <div>To comment please login <a href="{{ route('login') }}">Login</a></div>
                    @endif
                    </div>
                </div>

        </div>
    </div>
    <!-- /.card-body -->
</div>

@endsection