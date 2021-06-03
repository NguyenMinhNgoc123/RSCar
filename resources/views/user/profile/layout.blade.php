@extends('pages.frontend.welcome')
@section('title', 'PROFILE')
@section('content')
    @include('pages.banner')
    <section class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                @yield('content_profile')
                @include('user.profile.aside')
                <!--col-right sidebar col-sm-3 wow bounceInUp animated-->
            </div>
            <!--row-->
        </div>
        <!--main container-->
    </section>
@endsection
