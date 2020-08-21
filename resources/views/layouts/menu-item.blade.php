@foreach($categories as $category)
@if (!isset($category->children))
    <li class="dropdown-submenu dropdown-hover">
        <a id="dropdownSubMenu2" class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">{{ $category->name }}</a>
        @include('layouts.menu-item', ['categories' => $category])
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ $category->slug }}">{{ $category->name }}</a>
    </li>
@endif
@endforeach
