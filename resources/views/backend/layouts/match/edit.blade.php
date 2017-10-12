@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::model($match,['url' => 'dashboard/matches/'.$match->id, 'method' => 'PATCH','class'=>'form-horizontal']) !!}
            @include("backend.layouts.match.form",["form_name"=>"Edit"])
            {!! Form::close() !!}

        </div>
    </div>

@stop
