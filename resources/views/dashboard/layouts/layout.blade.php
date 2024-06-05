@include('layouts.head')

<body>
    @include('layouts.page-loading')

    <div class="app-wrap">
        <div class="app-container">
            @include('layouts.header')
            @include('layouts.sidebar')

            <div class="app-main">
                @include('dashboard.layouts.main')
            </div>
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>