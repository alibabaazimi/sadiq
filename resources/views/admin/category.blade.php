@extends('layouts.admin')

@section('content')

<select>
@foreach($categories as $category)
    @if (!$category->parent)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @if ($category->child->count()>0)
            @foreach($category->child as $child)
            <option value="{{ $child->id }}">--{{ $child->name }}</option>
            @endforeach
        @endif
    @endif
@endforeach
</select>

@endsection