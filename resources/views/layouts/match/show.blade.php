@extends('layouts.master')
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
@stop
