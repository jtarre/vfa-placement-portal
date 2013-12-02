@extends('layouts.default')

@section('header')
Dashboard
@stop

@section('content')

@if( Auth::check() )

	@if( Auth::user()->role == "Admin" )

	@elseif( Auth::user()->role == "Fellow") {{-- Fellow's Dashboard --}}
		@include('partials.dashboards.fellow', array('relationships' => $relationships))
	@elseif( Auth::user()->role == "Hiring Manager")

    @else
  <!-- We've got problems -->
	@endif
@endif

@stop
