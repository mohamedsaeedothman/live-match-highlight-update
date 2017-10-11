@extends('layouts.master')
@section('content')


    <div class="error-page">
        <h2 class="headline text-yellow"> 401</h2>

        <div class="error-content">
            <h3><i class="fa fa-warning text-yellow"></i> Oops! INSUFFICIENT ROLE.</h3>

            <p>
                You are not authorized to access this resource.
            </p>


        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
@stop
