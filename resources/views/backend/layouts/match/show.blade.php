@extends('backend.layouts.master')
@section('content')



    <div class="col-xs-6">
        <p class="lead"></p>

        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th style="width:50%">ID</th>
                    <td>{{$match->id}}</td>
                </tr>
                <tr>
                    <th>First Team</th>
                    <td>{{$match->firstTeam->name}}</td>
                </tr>
                <tr>
                    <th>Second Team</th>
                    <td>{{$match->SecondTeam->name}}</td>
                </tr>
                <tr>
                    <th>First Team Score</th>
                    <td>{{$match->first_team_score}}</td>
                </tr>
                <tr>
                    <th>Second Team Score</th>
                    <td>{{$match->second_team_score}}</td>
                </tr>
                <tr>
                    <th>Match Date</th>
                    <td>{{$match->match_date}}</td>
                </tr>
                <tr>
                    <th>Match Time</th>
                    <td>{{$match->match_time}}</td>
                </tr>
                <tr>
                    <th>Created At </th>
                    <td>{{$match->created_at}}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{$match->updated_at}}</td>
                </tr>
            </table>

        </div>


    </div>
    <div class="col-xs-6">

        @if($match->status == \App\Services\MatchStatus::$ongoing)
        {!! Form::open(['url' => 'dashboard/comments', 'method' => 'POST','class'=>'form-horizontal']) !!}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Add  </strong> Comment</h3>
                {{--validation errors if not okay--}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{--success message if okay--}}
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
                    </div>
                @endif

            </div>

            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Select Type </label>
                    <div class="col-md-6 col-xs-12">
                        <select name="type" class="form-control select2"   >
                            <option value="">Choose Type Of Comment</option>

                                <option  {{\App\Services\MatchTypes::checkIfMatchBegan($match->id)==true?'disabled':''}} value="0" >match beginning</option>
                                <option   value="1" >goal</option>
                                <option   value="2" >foul</option>
                                <option   value="3" >penalty</option>
                                <option   value="4" >offside</option>
                                <option   value="5" >yellow card</option>
                                <option   value="6" >red card</option>
                                <option   value="7" >match ended</option>


                        </select>

                        <span class="help-block">Required</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Choose Team that action Belongs to it</label>
                    <div class="col-md-6 col-xs-12">
                        <select name="belongs_to" class="form-control select2"   >
                            <option value="">Choose Team that action Belongs to it</option>
                            <option value="{{$match->first_team}}">{{$match->FirstTeam->name}}</option>
                            <option value="{{$match->second_team}}">{{$match->SecondTeam->name}}</option>




                        </select>

                        <span class="help-block">Optional</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 col-xs-12 control-label">Content</label>
                    <div class="col-md-6 col-xs-12">
                        <div class="input-group">
                            {!! Form::textarea('content', old('description'),['class'=>'form-control']) !!}
                        </div>
                        <span class="help-block">Required</span>
                    </div>
                </div>

                {!! Form::hidden('match_id',$match->id) !!}





            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-primary col-lg-offset-8">Submit</button>
            </div>
        </div>

        {!! Form::close() !!}
            @endif
    </div>
    <div class="col-xs-12">
        <h1 style=" padding-bottom: 50px ">Comments</h1>

        @foreach($match->comments  as $comment)
   <div class="timeline-item" style="padding-bottom: 50px">
        <span class="time"><i class="fa fa-clock-o"></i> {{$comment->created_at}}</span>

        <h3 class="timeline-header"> {{ \App\Services\MatchTypes::getType($comment->type)}}</h3>

        <div class="timeline-body">
            {{$comment->content}}
        </div>
        <div class="timeline-footer">

        </div>
    </div>
            @endforeach
    </div>
@stop
