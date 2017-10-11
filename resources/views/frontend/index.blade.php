@extends('frontend.master')
@section('content')


    {{--<h1>New Users</h1>--}}

    {{--<ul>--}}
        {{--<li v-repeat="user: users">@{{ user }}</li>--}}
    {{--</ul>--}}

    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.16/vue.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.3.7/socket.io.min.js"></script>--}}
    {{--<script src="http://localhost:3000/socket.io/socket.io.js" type="text/javascript"></script>--}}

    {{--<script>--}}
        {{--var socket = io('http://localhost:3000');--}}
        {{--new Vue({--}}
            {{--el: 'body',--}}
            {{--data: {--}}
                {{--users: []--}}
            {{--},--}}
            {{--ready: function() {--}}
                {{--socket.on('test-channel:InsertNewComment'.'{{}}', function(data) {--}}
                    {{--console.log(data);--}}
                    {{--this.users.push(data.username);--}}
                {{--}.bind(this));--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}






    <div class="matches-container">

        <div class="matches-tabs-header">

            <h1 class="tabs-title">Matches</h1>

            <div class="matches-tabs-btns">

                <a href="#tab-1" class="tab-btn  ">Yesterday</a>

                <a href="#tab-2" class="tab-btn ">Today</a>

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
                                <div class="team-logo">
                                <img src="img/egypt.png" alt="egypt">
                                </div>
                            </div>

                            <a href="{{\Illuminate\Support\Facades\URL::to('matches/'.$match->id)}}" class="clickable-anchor"></a>

                            <div class="result">
                                {{$match->first_team_score}} -  {{$match->second_team_score}}
                                <div style="color: red;">
                                    {{\App\Services\MatchStatus::getCurrentStatus(\App\Services\MatchStatus::$ended)}}

                                </div>

                            </div>

                            <div class="team">
                                <div class="team-logo">
                                <img src="img/saudi.png" alt="saudi arabia">
                                </div>
                                {{$match->secondTeam->name}}
                            </div>

                        </div>
                    @endforeach

                </div>


            </div>


            <div id="tab-2" class="tab-pane">
                <div class="matchs-list">

                    @foreach($todayMatches as $match)

                        <div class="match clickable-element">
                            <div class="team">
                                {{$match->firstTeam->name}}
                                <div class="team-logo">
                                <img src="img/egypt.png" alt="egypt">
                                </div>
                            </div>

                            <a href="{{\Illuminate\Support\Facades\URL::to('matches/'.$match->id)}}" class="clickable-anchor"></a>

                            <div class="result">
                                {{$match->first_team_score}} -  {{$match->second_team_score}}
                                <div style="color: red;">
                                    {{\App\Services\MatchStatus::getCurrentStatus($match->status)}}

                                </div>

                            </div>

                            <div class="team">
                                <div class="team-logo">
                                <img src="img/saudi.png" alt="saudi arabia">
                                </div>
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
                                <div class="team-logo">
                                <img src="img/egypt.png" alt="egypt">
                                </div>
                            </div>

                            <a href="{{\Illuminate\Support\Facades\URL::to('matches/'.$match->id)}}" class="clickable-anchor"></a>

                            <div class="result">
                                {{$match->first_team_score}} -  {{$match->second_team_score}}
                                <div style="color: red;">
                                    {{\App\Services\MatchStatus::getCurrentStatus(\App\Services\MatchStatus::$NoStart)}}

                                </div>

                            </div>

                            <div class="team">
                                <div class="team-logo">
                                <img src="img/saudi.png" alt="saudi arabia">
                                </div>
                                {{$match->secondTeam->name}}
                            </div>

                        </div>
                    @endforeach

                </div>


            </div>

        </div>



    </div>


@stop
