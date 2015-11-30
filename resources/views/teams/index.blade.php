@extends('app')

@section('content')
    <h1>Teams</h1>

    <hr/>

    @foreach($teams as $team)
        <team>
            <h2><a href=" {{ url('/teams', [$team->id]) }}" >{{ $team->name }}</a></h2>
            <div class="body">{{ $team->password }}</div>
            <div class="body">{{ $sport[$team->sportID] }}</div>
        </team>
    @endforeach
@stop