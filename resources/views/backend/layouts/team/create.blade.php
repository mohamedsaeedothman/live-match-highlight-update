@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['url' => 'dashboard/teams', 'method' => 'POST','class'=>'form-horizontal']) !!}
                @include("backend.layouts.team.form",["form_name"=>"Add New "])
            {!! Form::close() !!}

        </div>
    </div>

@stop
