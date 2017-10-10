@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::model($team,['url' => 'dashboard/teams/'.$team->id, 'method' => 'PATCH','class'=>'form-horizontal']) !!}
            @include("layouts.team.form",["form_name"=>"Edit"])
            {!! Form::close() !!}

        </div>
    </div>

@stop
