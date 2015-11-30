@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading panel-title">{{ $sport->name }}</div>
                    <div class="panel-body">
                        <div class="control-label">Min Player: {{ $sport->minPlayer }}</div>
                        <div class="contorl-label">Max Player: {{ $sport->maxPlayer }}</div>
                        <div class="control-label">Number of Rounds: {{ $sport->rounds }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop