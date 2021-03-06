@extends('layouts.simple')

@section('title', 'Page Not Found')

@section('sidebar')

@endsection

@section('content')
<div class="main-content">
    <div class="eq-col">
        <div class="relative full-height">
            <div class="display-row">

                <!-- error wrapper -->
                <div class="center-wrapper error-page">
                    <div class="center-content text-center">
                        <div class="error-number">
                            <span>404</span>
                        </div>
                        <div class="h5">Be right back.</div>
                        <p>Sorry, Site is down for maintaince</p>
                    </div>
                </div>
                <!-- /error wrapper -->

            </div>
        </div>
    </div>

</div>
@endsection