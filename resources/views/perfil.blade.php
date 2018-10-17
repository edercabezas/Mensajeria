@extends('layouts.app')

@section('content')
       <perfil-component :user="{{ auth()->user() }}" 
       					 csrf-token="{{ csrf_token() }}"/>
@endsection
