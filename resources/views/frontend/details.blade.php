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
@foreach($match->comments as $comment)
        <div class="card">
            <div class="card-header text-center">
                {{\App\Services\MatchTypes::getType($comment->type)}}
            </div>
            <div class="card-body " style="text-align: left">
                <div class="time">comment time :  {{$comment->created_at}}</div>
               {{$comment->content}}
            </div>
        </div>
    @endforeach
    </div>



@stop
