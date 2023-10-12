<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
    <div class="d-block border rounded mfliud-bot">
        <div class="dashboard_author px-2 py-5">
            <div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
                @if(!empty(userProfilePic()->image))
                <img style="height: 100px;" src="{{ asset('upload/profile/'.userProfilePic()->image) }}" class="img-fluid circle" width="100"  alt="" />
                @else
                <img src="{{ asset('asset/img/customer.jpg') }}" class="img-fluid circle" width="100" alt="" />
                @endif
            </div>
            <div class="dash_caption">
                <h4 class="fs-md ft-medium mb-0 lh-1">Awahab</h4>
                <span class="text-muted smalls">User</span>
            </div>
        </div>

        <div class="dashboard_author text-left">
            <p class="px-3 py-2 mb-0 lh-2 gray fs-sm ft-medium text-muted text-uppercase text-left">Dashboard Navigation</p>
                <a  href="#" class="text-secondary"><i class="fa fa-shopping-basket mr-2"></i>&nbsp;&nbsp;My Order</a><hr>
                {{-- <a @if(url()->current() == Route::is('wishlist')) class="active" @endif href="{{ route('wishlist') }}"><i class="fa fa-heart mr-2"></i>&nbsp;&nbsp;Wishlist</a><hr> --}}
                <a  @if(url()->current() == Route::is('profile')) class="active" @endif href="{{route('profile')}}" class="text-secondary"><i class="fa fa-user mr-2"></i>&nbsp;&nbsp;Profile Info</a><hr>
                <a href="#" class="text-secondary"><i class="fa fa-map-marker mr-2"></i>&nbsp;&nbsp;Addresses</a><hr>
                <a href="logout" class="text-secondary" style="text-align:left;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><i class="fa fa-power-off mr-2"></i>&nbsp;&nbsp;
                    Log Out
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                </a><br><br>
        </div>

    </div>
</div>
