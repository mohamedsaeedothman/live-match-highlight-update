<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>{{$form_name}} </strong> Moderator</h3>
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
            <label class="col-md-3 col-xs-12 control-label">First Name</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {!! Form::text('first_name', old('first_name'),['class'=>'form-control']) !!}
                </div>
                <span class="help-block">Required</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Last Name</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {!! Form::text('last_name', old('last_name'),['class'=>'form-control']) !!}
                </div>
                <span class="help-block">Required</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">E-mail</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                    {!! Form::email('email', old('email'),['class'=>'form-control']) !!}
                </div>
                <span class="help-block">Required , Must have E-mail Format</span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Password</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                    {!! Form::password('password', ['class' => 'form-control']) !!}                          </div>
                <span class="help-block">Required, min:3 char</span>
            </div>
        </div>



    </div>
    <div class="panel-footer">
        <button type="submit" class="btn btn-primary col-lg-offset-8">Submit</button>
    </div>
</div>
