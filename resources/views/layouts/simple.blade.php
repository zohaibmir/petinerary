<!doctype html>
<html class="no-js" lang="">

    <head>

        <title>@yield('title')</title>
        @include('common._meta')
        @include('common._css')

    </head>

    <body>

       
        @section('sidebar')
        <!-- sidebar panel -->



        <!-- /sidebar panel -->
        @show
        <div class="app layout-fixed-header bg-white usersession">
            <div class="full-height">
                  @include('common._message')
                <div class="center-wrapper">
                    <div class="center-content">
                        
                        <div class="row no-margin">
                            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('common._js')

    </body>

</html>
