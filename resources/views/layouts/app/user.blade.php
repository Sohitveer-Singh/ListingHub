@extends('layouts.app')
@section('content')
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <x-app.core.header/>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- Offcanvas Menu Slider -->
    <x-app.ui.slider.offcanvas-menu/>

    <!-- ============================ Dashboard Start ================================== -->
    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row user-dashboard g-0">

                @yield('page')

            </div>
        </div>
    </section>
    <!-- ============================ Dashboard End ================================== -->

    <!-- Log In Modal -->
    <x-app.ui.modal.login/>
    <!-- End Modal -->

    <!-- Cart Slider Wrap -->
    <x-app.ui.slider.card/>

    <!-- Search Slider Wrap  -->
    <x-app.ui.slider.search/>
@endsection
@push('scripts')
    <script>
        //--------- Search Input --------  //
        function initDropdown(inputId, dropdownId) {

            const input = document.getElementById(inputId);
            const dropdown = document.getElementById(dropdownId);
            const items = dropdown.querySelectorAll(".selected-item");

            // Open dropdown
            input.addEventListener("click", function () {
                dropdown.style.display = "block";
            });

            // Fill & close
            items.forEach(item => {
                item.addEventListener("click", function () {
                    const value = this.getAttribute("data-value");
                    input.value = value;
                    dropdown.style.display = "none";
                });
            });

            // Outside click close
            document.addEventListener("click", function (e) {
                if (!input.contains(e.target) && !dropdown.contains(e.target)) {
                    dropdown.style.display = "none";
                }
            });
        }

        /* Initialize multiple dropdowns */
        initDropdown("searchItem", "itemMenu");
        initDropdown("searchLocation", "locationMenu");
    </script>
@endpush
