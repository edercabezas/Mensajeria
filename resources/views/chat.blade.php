@extends('layouts.app')

@section('content')
      <!--  <mensaje-component :user="{{ auth()->user() }}" /> -->
          
         <router-view :user="{{ auth()->user() }}" />
     
@endsection
