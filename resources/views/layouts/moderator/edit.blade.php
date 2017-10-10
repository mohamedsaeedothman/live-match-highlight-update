@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::model($moderator,['url' => 'dashboard/moderators/'.$moderator->id, 'method' => 'PATCH','class'=>'form-horizontal']) !!}
            @include("layouts.moderator.form",["form_name"=>"Edit"])
            {!! Form::close() !!}

        </div>
    </div>

@stop
