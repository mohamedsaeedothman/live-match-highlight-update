@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Matches List</h3>
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
                            <th>First Team</th>
                            <th>Second Team</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($matches as $match)
                            <tr>
                                <td>{!!  $match->firstTeam->name!!}</td>
                                <td>{!!  $match->secondTeam->name!!}</td>
                                <td>
                                    <a  href="{!! \Illuminate\Support\Facades\URL::to('dashboard/matches/'.$match->id.'/edit') !!}" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></a>
                                    <a  href="{!! \Illuminate\Support\Facades\URL::to('dashboard/matches/'.$match->id) !!}" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-search"></span></a>
                                    {!!  Form::open(['action' => ['MatchesController@destroy', $match->id],'method'=>'DELETE'])!!}
                                    <button type="submit"  onclick="return confirm('Are you sure you want to this match?');" class="btn btn-default btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                     {{--pagination--}}
                    <div class="col-lg-offset-5">

                        {!!  $matches->render()!!}

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