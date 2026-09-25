<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">
<head>
    <x-app.core.head/>
</head>

<body class="bg-cover bg-light-primary" style="background: url({{asset('assets/img/auth-bg.png')}}) no-repeat;">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">


    @yield('content')


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/js/vendors.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->


{{-- Validation Errors --}}
@if ($errors->any())
    <div class="position-fixed top-0 end-0 p-3"
         style="z-index: 9999; width: 400px; max-width: 100%;">

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-2 validation-error"
                 role="alert">

                <i class="bi bi-exclamation-circle me-2"></i>
                {{ $error }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>

                {{-- Progress line --}}
                <div class="validation-error-progress"></div>
            </div>
        @endforeach

    </div>
@endif

<style>
    .validation-error {
        position: relative;
        overflow: hidden;
        padding-bottom: 14px;
    }

    .validation-error-progress {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 3px;
        width: 100%;
        background: currentColor;
        opacity: .5;
        animation: validation-error-countdown 4s linear forwards;
    }

    @keyframes validation-error-countdown {
        from {
            width: 100%;
        }

        to {
            width: 0%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.validation-error').forEach(function (alert) {
            setTimeout(function () {
                const closeButton = alert.querySelector('.btn-close');

                if (closeButton) {
                    closeButton.click();
                }
            }, 4000);
        });
    });
</script>

@stack('scripts')

</body>

</html>
