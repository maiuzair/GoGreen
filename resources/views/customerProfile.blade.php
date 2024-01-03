@extends('Layouts.mainLayout')
@section('title', 'Home')
@section('css')
    href={{ URL::asset('css/heroes.css')}}
@endsection

{{-- @section('nav')
    @include('Layouts.navLayout')
    @yield('guestNav')
@endsection --}}

@section('maincontent')

<h1>Customer Profile</h1>


<a class="nav-link d-flex align-items-center gap-2" href="logout">
    <svg class="bi" width="20px" height="20px">
        <use xlink:href="#door-closed" />
    </svg>
    Sign out
</a>

@endsection