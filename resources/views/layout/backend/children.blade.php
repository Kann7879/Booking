@php
    $permissionName = optional($menu->permissionGroup)->name . ' Access';
@endphp

@can($permissionName)
    @if($menu->children->isNotEmpty())
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                @if($menu->icon)
                    <i class="menu-icon icon-base ri {{ $menu->icon }}"></i>
                @endif
                <div data-i18n="{{ $menu->nama_menu }}">{{ $menu->nama_menu }}</div>
            </a>
            <ul class="menu-sub">
                @foreach($menu->children as $child)
                    @include('layout.backend.children', ['menu' => $child])
                @endforeach
            </ul>
        </li>
    @else
        <li class="menu-item">
            <a href="{{ $menu->href ?? '#' }}" class="menu-link">
                {{-- @if($menu->icon)
                    <i class="menu-icon icon-base ri {{ $menu->icon }}"></i>
                @endif --}}
                <div data-i18n="{{ $menu->nama_menu }}">{{ $menu->nama_menu }}</div>
            </a>
        </li>
    @endif
@endcan
