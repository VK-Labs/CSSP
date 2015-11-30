@extends('app')

@section('content')
    <h1>Sports</h1>

    <hr/>

    @foreach($sports as $sport)
        <team>
            <div class="list-group-item col-md-2 col-md-offset-5 text-center"><a href=" {{ url('/sports', [$sport->id]) }}" >{{ $sport->name}}</a></div>
        </team>
    @endforeach
@stop