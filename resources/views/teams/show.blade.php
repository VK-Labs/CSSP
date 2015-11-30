@extends('app')

@section('content')
    <h1>{{ $team->name }}</h1>

    <hr/>

    <team>
        {{ $team->password }}</br>
        {{ $team->sportID }}
    </team>
@stop