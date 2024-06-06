@include('layouts.head')

<body>
    @include('layouts.page-loading')

    <div class="app-wrap">
        @include('layouts.header')
        <div class="app-container">
            @include('layouts.sidebar')
            <div class="app-main">
                <main>
                    <!-- BEGIN .main-heading -->
                    <header class="main-heading">
                        @yield('heading')
                    </header>
                    <!-- END: .main-heading -->
                    <!-- BEGIN .main-content -->
                    <div class="main-content">
                        @yield('content')
                    </div>
                    <!-- END: .main-content -->
                </main>
            </div>
        </div>
    </div>

    @include('layouts.footer')
    @include('layouts.scripts')
</body>

</html>