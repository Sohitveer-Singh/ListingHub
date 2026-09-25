<div>
    <!-- Dashboard Title -->
    <div class="dashHeader p-xl-5 p-4 pb-xl-0 pb-0">
        <h2 class="fw-medium mb-0 fs-1">Hello, {{auth()->user()->name}}</h2>
    </div>

    {{$slot}}
</div>
