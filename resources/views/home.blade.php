@extends('layout')
    
@section('content')    

    <!-- ACCUEIL -->
    
@include('composants.accueil')

    <!-- NAVBAR -->

@include('composants.navbar')

    <!-- PORTFOLIO -->
    
@include('composants.portfolio')

    <!--CONTACT-->

@include('composants.contact')

    <!--FOOTER-->

@include('composants.footer')

@endsection