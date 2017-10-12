@extends('frontend.master')
@section('content')

    <div class="matches-container">
        <div class="match match-details-header">
            <div class="team">
                {{$match->firstTeam->name}}
            </div>

            <a href="{{\Illuminate\Support\Facades\URL::to('matchs/'.$match->id)}}" class="clickable-anchor"></a>

            <div class="result">
                <div style="color: blue;">
                    match time : {{$match->match_time}}

                </div>
                {{$match->first_team_score}} -  {{$match->second_team_score}}

                <div style="color: red;">
                    {{\App\Services\MatchStatus::getCurrentStatus($match->status)}}

                </div>

            </div>

            <div class="team">

                {{$match->secondTeam->name}}
            </div>

        </div>
         <h3 class="text-center ">Match Description</h3>
        <p class="text-center " style="padding-top: 20px">
            {{$match->description}}
        </p>
        <h3 class="text-center ">Match Comments</h3>

        <div id="comments-container" >
            @foreach($match->comments as $comment)

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title  text-center">{{\App\Services\MatchTypes::getType($comment->type)}}
                    </h3>
                </div>
                <div class="panel-body" style="text-align: left">
                    <div class="time">comment time :  {{$comment->created_at}}</div>

                    {{$comment->content}}
                </div>
            </div>

    @endforeach
        </div>
    </div>

{{-- import socket.io --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.min.js"></script>
    <script src="http://localhost:3000/socket.io/socket.io.js" type="text/javascript"></script>
    <script>
        // listen to port 3000
        var socket = io('http://localhost:3000');
        socket.on('test-channel:InsertNewComment'+'{!! $match->id !!}', function(data) {
            // prepend comment to my comments using jquery
            $("#comments-container").prepend('<div class="panel panel-info"> <div class="panel-heading"> <h3 class="panel-title  text-center">'+data.type+'</h3> </div> <div class="panel-body" style="text-align: left"> <div class="time">comment time :  '+data.created_at+'</div>'+data.content+'</div> </div>');

        });


    </script>

@stop



