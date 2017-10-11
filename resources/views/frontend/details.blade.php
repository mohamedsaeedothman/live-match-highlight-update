@extends('frontend.master')
@section('content')



    <div class="matches-container">
        <div class="match match-details-header">
            <div class="team">
                {{$match->firstTeam->name}}
                {{--<div class="team-logo">--}}
                {{--<img src="img/egypt.png" alt="egypt">--}}
                {{--</div>--}}
            </div>

            <a href="{{\Illuminate\Support\Facades\URL::to('matchs/'.$match->id)}}" class="clickable-anchor"></a>

            <div class="result">
                {{$match->first_team_score}} -  {{$match->second_team_score}}
                <div style="color: red;">
                    {{\App\Services\MatchStatus::getCurrentStatus(\App\Services\MatchStatus::$NoStart)}}

                </div>

            </div>

            <div class="team">
                {{--<div class="team-logo">--}}
                {{--<img src="img/saudi.png" alt="saudi arabia">--}}
                {{--</div>--}}
                {{$match->secondTeam->name}}
            </div>

        </div>

        <p class="text-center">
            {{$match->description}}
        </p>
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.min.js"></script>
    <script src="http://localhost:3000/socket.io/socket.io.js" type="text/javascript"></script>
    <script>
        var socket = io('http://localhost:3000');
        socket.on('test-channel:InsertNewComment'+'{!! $match->id !!}', function(data) {
            $("#comments-container").prepend('<div class="panel panel-info"> <div class="panel-heading"> <h3 class="panel-title  text-center">'+data.type+'</h3> </div> <div class="panel-body" style="text-align: left"> <div class="time">comment time :  '+data.created_at+'</div>'+data.content+'</div> </div>');

        });


    </script>

@stop



