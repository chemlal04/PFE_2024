@extends('dashboard')

@section('content')
@if(isset($vols))
    <p>{{ $vols }}</p>
@else
    <p>No vols data found</p>
@endif


@endsection
