<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>{{$form_name}} </strong> Team</h3>
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
        <p></p>
    </div>
    <div class="panel-body">

        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Team Name</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {!! Form::text('name', old('name'),['class'=>'form-control']) !!}
                </div>
                <span class="help-block">Required | unique</span>
            </div>
        </div>



    </div>
    <div class="panel-footer">
        <button type="submit" class="btn btn-primary col-lg-offset-8">Submit</button>
    </div>
</div>
