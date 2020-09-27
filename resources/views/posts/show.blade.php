<h1>{{ $post->title }}</h1>


@foreach ($post->comments as $comment)
<h3>{{ $comment->text }}</h3>
<h5>{{ $comment->user->name }}</h3>
<h6>{{ $comment->user->image->path }}</h6>
@endforeach


@php
dd (DB::getQueryLog())
@endphp