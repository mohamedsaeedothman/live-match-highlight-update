@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">

            {!! Form::open(['url' => 'dashboard/matches', 'method' => 'POST','class'=>'form-horizontal']) !!}
                @include("backend.layouts.match.form",["form_name"=>"Add New "])
            {!! Form::close() !!}

        </div>
    </div>

@stop
@section('js')


    <script src="{{asset('../../admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

        })
    </script>
@stop
