@extends('admin.layouts.admin-scaffold')
@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    a{
        text-decoration: none;
    }
</style>
@endpush
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item navbar-search-wrapper mb-0">
          <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
            <i class="fa fa-search"></i>
            <span style="margin-left: 10px;" class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
          </a>
        </div>
      </div>
      <!-- /Search -->
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Style Switcher -->
        <li class="nav-item me-2 me-xl-0">
          <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
            <i class='ti ti-md'></i>
          </a>
        </li>
        <!--/ Style Switcher -->
        <a href="{{ route('index') }}"><i style="font-size: 25px; margin-right: 10px;" class="fa fa-globe"></i></a>
        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="{{ asset('admin/assets/img/avatars/14.png') }}" alt="" class="h-auto rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="pages-account-settings-account.html">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('admin/assets/img/avatars/14.png') }}" alt="" class="h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-semibold d-block">John Doe</span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
                {{-- <a class="dropdown-item" >
                   <i class="fa fa-user"></i>
                   <span class="align-middle" data-toggle="modal" data-target="#myModal">Profile</span>
                </a>
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Modal Heading</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          Modal body..
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                      </div>
                    </div>
                  </div> --}}
                  <div class="container">
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                      Open modal
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            Modal body..
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>

                        </div>
                      </div>
                    </div>

                  </div>

             </li>
               <li>
                  <a class="dropdown-item" href="{{ route('admin.logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     <i class="fa fa-power-off"></i>
                     <span class="align-middle">Log Out</span>
                     <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </a>
               </li>
          </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>
    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
      <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
    <i class="ti ti-x ti-sm fa fa-search cursor-pointer"></i>
    </div>
</nav>
