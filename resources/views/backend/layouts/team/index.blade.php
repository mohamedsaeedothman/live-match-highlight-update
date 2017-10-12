@extends('backend.layouts.master')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Teams List</h3>
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
                            <th>Team Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <td>{!!  $team->name !!}</td>
                                <td>{!!  $team->created_at !!}</td>
                                <td>{!!  $team->updated_at !!}</td>
                                <td>
                                    <a  href="{!! \Illuminate\Support\Facades\URL::to('dashboard/teams/'.$team->id.'/edit') !!}" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>
                                    {!!  Form::open(['action' => ['TeamsController@destroy', $team->id],'method'=>'DELETE','style'=>'display:inline-block'])!!}
                                    <button type="submit"  onclick="return confirm('Are You Sure  That You Want To Delete This Team?');" class="btn btn-default btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                     {{--pagination--}}
                    <div class="col-lg-offset-5">

                        {!!  $teams->render()!!}

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