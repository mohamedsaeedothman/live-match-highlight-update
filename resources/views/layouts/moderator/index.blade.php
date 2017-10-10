@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Moderators List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{--success message if okay--}}
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
                        </div>
                    @endif
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($moderators as $moderator)
                            <tr>
                                <td>{!!  $moderator->first_name." ".$moderator->last_name !!}</td>
                                <td>{!!  $moderator->email !!}</td>
                                <td>
                                    <a  href="{!! \Illuminate\Support\Facades\URL::to('dashboard/moderators/'.$moderator->id.'/edit') !!}" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>
                                    <a  href="{!! \Illuminate\Support\Facades\URL::to('dashboard/moderators/'.$moderator->id) !!}" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-search"></span></a>
                                    {!!  Form::open(['action' => ['ModeratorsController@destroy', $moderator->id],'method'=>'DELETE'])!!}
                                    <button type="submit"  onclick="return confirm('Are you sure you want to this moderator?');" class="btn btn-default btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                     {{--pagination--}}
                    <div class="col-lg-offset-5">

                        {!!  $moderators->render()!!}

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
        </div>
        <!-- /.col -->

@stop
@section('js')
            <script src="{{asset('../../admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('../../admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>


@stop