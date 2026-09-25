<div class="nav-menus-wrapper">
    <ul class="nav-menu">

        <li class="active">
            <a href="">Home</a>
        </li>

        <li class="">
            <a href="">Listings</a>
        </li>

        <li class="">
            <a href="">About Us </a>
        </li>

        <li class="">
            <a href="">Privacy Policy</a>
        </li>


        <li class="addButton"><a class="mob-addlisting" href="JavaScript:Void(0);"><i
                    class="bi bi-geo-alt-fill me-1"></i>Add Listing</a></li>

    </ul>

    <ul class="nav-menu nav-menu-social align-to-right">

        @auth
            <li>
                <a href="u" class="d-flex align-items-center m-0"><i class="bi bi-person-circle fs-5 "></i></a>
            </li>
        @else
            <li>
                <a href="{{route('login')}}"><i class="bi bi-person-circle fs-5 "></i></a>
            </li>
        @endauth


        <li>
            <a href="index.html#searchSlider" class="cart-content m-0 me-2" data-bs-toggle="offcanvas"
               role="button" aria-controls="searchSlider"><i class="bi bi-search fs-5"></i>
            </a>
        </li>
        <li class="list-buttons" >
            @auth
                <a href="">
                    <i class="bi bi-patch-plus-fill me-2"></i>
                    Add Listing
                </a>
            @else

                <a href="{{ route('login') }}"
{{--                   data-bs-toggle="modal" data-bs-target="#login"--}}
                >
                    <i class="bi bi-person-circle me-2"></i>
                    Sign In
                </a>

            @endauth

        </li>
    </ul>
</div>
