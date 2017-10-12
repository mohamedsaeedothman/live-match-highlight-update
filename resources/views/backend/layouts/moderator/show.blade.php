@extends('backend.layouts.master')
@section('content')
    <div class="col-xs-6">
        <p class="lead"></p>

        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th style="width:50%">ID</th>
                    <td>{{$moderator->id}}</td>
                </tr>
                <tr>
                    <th>First Name</th>
                    <td>{{$moderator->first_name}}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{$moderator->last_name}}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$moderator->email}}</td>
                </tr>
                <tr>
                    <th>Created At </th>
                    <td>{{$moderator->created_at}}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{$moderator->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
@stop
