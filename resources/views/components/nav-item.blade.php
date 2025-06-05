@props(['href', 'active' => false])
<li class="nav-item">
    <a href="{{ $href }}" @class(['nav-link', 'active' => $active])>{{ $slot }}</a>
</li>
