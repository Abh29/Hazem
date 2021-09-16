@extends('layouts.app')

@section('content')


        @include('layouts.sidebar')
                
        @include('layouts.header')

		@include('layouts.mainBanner')

        <div style="height: 500px"></div>

		<!--NEWS LETTERS START-->
        @include('layouts.newsletter')
		<!--NEWS LETTERS END-->
		<!--FOOTER START-->
		@include('layouts.footer')
		<!--FOOTER END-->
		<!--COPYRIGHTS START-->
		@include('layouts.copyrights')
    
@endsection