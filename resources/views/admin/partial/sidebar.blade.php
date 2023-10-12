<style>
    .bg-menu-theme.menu-vertical .menu-item.active>.menu-link:not(.menu-toggle) {
        background: #3498DB;
    }
    .bg-menu-theme.menu-vertical .menu-sub>.menu-item>.menu-link:before {
    left: -5rem;
    }
    </style>
<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
      <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
        <div>
            <img src="{{ asset('admin/assets/img/img1.png') }}" alt="" width="80%">
        </div>
  </span>
      </a>
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li @if(url()->current() == Route::is('admin.dashboard')) class="menu-item active" @endif class="menu-item">
            <a href="{{ route('admin.dashboard') }}" class="mt-2 menu-link">
                <i style="margin-right: 10px;" class="fa fa-dashboard"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <li class="menu-item"  style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa fa-caret-down"></i>
                <div data-i18n="Catalogue">Catalogue</div>
            </a>
        </li>
    </ul>
  </aside>
  <!-- / Menu -->
