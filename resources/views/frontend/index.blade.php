@extends('frontend.master')
@section('content')

    <div class="matches-container">

        <div class="matches-tabs-header">

            <h1 class="tabs-title">Matches</h1>

            <div class="matches-tabs-btns">

                <a href="#tab-1" class="tab-btn  ">Yesterday</a>

                <a href="#tab-2" class="tab-btn  first-active">Today</a>

                <a href="#tab-3" class="tab-btn">Tomorrow</a>

            </div>

        </div>

        <div class="tabs-content">

            <div id="tab-1" class="tab-pane">
                <div class="matchs-list">

                    @foreach($yesterdayMatches as $match)

                        <div class="match clickable-element">
                            <div class="team">
                                {{$match->firstTeam->name}}

                            </div>

                            <a href="{{\Illuminate\Support\Facades\URL::to('matches/'.$match->id)}}" class="clickable-anchor"></a>

                            <div class="result">
                                {{$match->first_team_score}} -  {{$match->second_team_score}}
                                <div style="color: blue;">
                                    match time : {{$match->match_time}}

                                </div>
                                <div style="color: red;">
                                    {{\App\Services\MatchStatus::getCurrentStatus($match->status)}}

                                </div>

                            </div>

                            <div class="team">

                                {{$match->secondTeam->name}}
                            </div>

                        </div>
                    @endforeach

                </div>


            </div>


            <div id="tab-2" class="tab-pane first-active ">
                <div class="matchs-list">

                    @foreach($todayMatches as $match)

                        <div class="match clickable-element">
                            <div class="team">
                                {{$match->firstTeam->name}}

                            </div>

                            <a href="{{\Illuminate\Support\Facades\URL::to('matches/'.$match->id)}}" class="clickable-anchor"></a>

                            <div class="result">
                                {{$match->first_team_score}} -  {{$match->second_team_score}}
                                <div style="color: blue;">
                                    match time : {{$match->match_time}}

                                </div>
                                <div style="color: red;">
                                    {{\App\Services\MatchStatus::getCurrentStatus($match->status)}}

                                </div>

                            </div>

                            <div class="team">

                                {{$match->secondTeam->name}}
                            </div>

                        </div>
                    @endforeach

                </div>


            </div>


            <div id="tab-3" class="tab-pane">
                <div class="matchs-list">

                    @foreach($tomorrowMatches as $match)

                        <div class="match clickable-element">
                            <div class="team">
                                {{$match->firstTeam->name}}

                            </div>

                            <a href="{{\Illuminate\Support\Facades\URL::to('matches/'.$match->id)}}" class="clickable-anchor"></a>

                            <div class="result">
                                {{$match->first_team_score}} -  {{$match->second_team_score}}
                                <div style="color: blue;">
                                    match time : {{$match->match_time}}

                                </div>
                                <div style="color: red;">
                                    {{\App\Services\MatchStatus::getCurrentStatus($match->status)}}

                                </div>

                            </div>

                            <div class="team">

                                {{$match->secondTeam->name}}
                            </div>

                        </div>
                    @endforeach

                </div>


            </div>

        </div>



    </div>


@stop
