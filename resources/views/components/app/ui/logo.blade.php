<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
@props([
    'logo' => 'logo.svg',
])

<a {{ $attributes->merge(['class' => '']) }} href="index.html#">
    <img src="{{asset('assets/img/'.$logo)}}" class="logo main-logo" alt="{{ config('app.name') }}">
    <img src="{{asset('assets/img/'.$logo)}}" class="logo change-logo" alt="{{ config('app.name') }}">
    <img src="{{asset('assets/img/'.$logo)}}" class="logo mobile-logo" alt="{{ config('app.name') }}">
</a>
