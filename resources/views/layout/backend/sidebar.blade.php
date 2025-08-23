<div class="sidebar">
<div>
        <a href="index.html" class="sidebar-logo">
          <img
            src="assets/images/logo.png"
            alt="site logo"
            class="light-logo"
          />
          <img
            src="assets/images/logo-light.png"
            alt="site logo"
            class="dark-logo"
          />
          <img
            src="assets/images/logo-icon.png"
            alt="site logo"
            class="logo-icon"
          />
        </a>
      </div>
      <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
        @foreach($menus as $menu)
            @can($menu->permissionGroup->name)
                <li class="{{ $menu->children->count() ? 'dropdown' : '' }}">
                    <a href="{{ $menu->href ?? 'javascript:void(0)' }}">
                        @if($menu->icon)
                            <iconify-icon icon="{{ $menu->icon }}" class="menu-icon"></iconify-icon>
                        @endif
                        <span>{{ $menu->nama_menu }}</span>
                    </a>

                    @if($menu->children->count())
                        <ul class="sidebar-submenu">
                            @foreach($menu->children as $child)
                                @can($child->permissionGroup->name)
                                    <li>
                                        <a href="{{ $child->href }}">
                                            <i class="{{ $child->icon }}"></i> {{ $child->nama_menu }}
                                        </a>
                                    </li>
                                @endcan
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endcan
        @endforeach
        </ul>

      </div>
</div>