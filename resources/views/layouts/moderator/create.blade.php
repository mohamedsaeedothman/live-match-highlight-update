@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['url' => 'dashboard/moderators', 'method' => 'POST','class'=>'form-horizontal']) !!}
                @include("layouts.moderator.form",["form_name"=>"Add New "])
            {!! Form::close() !!}

        </div>
    </div>

@stop
