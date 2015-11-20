<!doctype html>
<html class="no-js" lang="">

    <head>

        <title>@yield('title')</title>
        @include('common._meta')
        @include('common._css')

    </head>

    <body>

        <!-- quick launch panel -->
        @include('common._quicklaunch')
        <!-- /quick launch panel -->

        <div class="app layout-fixed-header">

            <div class="sidebar-panel offscreen-left">
                @section('sidebar')
                <!-- sidebar panel -->

                @include('common._sidebar')

                <!-- /sidebar panel -->
                @show
            </div>

            <!-- content panel -->
            <div class="main-panel">

                <!-- top header -->
                @include('common._header')
                <!-- /top header -->

                <!-- main area -->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- /main area -->
            </div>
            <!-- /content panel -->

            <!-- bottom footer -->
            @include('common._footer')
            <!-- /bottom footer -->

            <!-- chat -->
            @include('common._chat')
            <!-- /chat -->
        </div>

        @include('common._js')

    </body>

</html>
