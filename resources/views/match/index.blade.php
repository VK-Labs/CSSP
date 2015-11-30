@extends('app')

@section('content')
    <script>
        $(document).ready(function(){
            $("#sport").change(function(){
                alert("You selected " + $("#sport option:selected").text());
            });
        });
    </script>

    <h1>Matches</h1>

    <hr/>

    <div class="form-horizontal">
    <div class="form-group">
        {!! Form::label('Sport', 'Sport:', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-2">
            {!! Form::select('sport', $sports, null, array('class' => 'form-control', 'id' => 'sport')) !!}
        </div>

    </div>
    </div>

@stop