<li class="menu-item active open">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
        <div data-i18n="Menu">Menu</div>
    </a>
    <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('home') ? 'active' : '' }}">
            <a wire:navigate.hover href="{{ route('home') }}" class="menu-link">
                <div data-i18n="Home">Home</div>
            </a>
        </li>
        <li class="menu-item {{ Request::routeIs('post') ? 'active' : '' }}">
            <a wire:navigate.hover href="{{ route('post') }}" class="menu-link">
                <div data-i18n="Post">Post</div>
            </a>
        </li>
    </ul>
</li>