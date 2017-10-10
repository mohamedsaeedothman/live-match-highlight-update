<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>{{$form_name}} </strong> Match</h3>
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
            <label class="col-md-3 col-xs-12 control-label">Select First Team</label>
            <div class="col-md-6 col-xs-12">
                <select name="first_team" class="form-control select2"   >
                    <option value="">Choose First Team</option>

                    @foreach($teams as $team)

                        <option {{isset($match)?($team->id==$match->first_team)?"selected":'':''}}  value="{{$team->id}}" >{{$team->name}}</option>
                    @endforeach

                </select>
                <span class="help-block">Required</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Select Second Team</label>
            <div class="col-md-6 col-xs-12">
                <select name="second_team" class="form-control select2"   >
                    <option value="">Choose Second Team</option>

                    @foreach($teams as $team)

                        <option {{isset($match)?($team->id==$match->second_team)?"selected":'':''}}  value="{{$team->id}}" >{{$team->name}}</option>
                    @endforeach

                </select>
                <span class="help-block">Required</span>
            </div>
        </div>

      @if(isset($match))

        @include('layouts.match.score')
        @endif

        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Description</label>
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    {!! Form::textarea('description', old('description'),['class'=>'form-control']) !!}
                </div>
                <span class="help-block">Required</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label">Match Date</label>
            <div class="col-md-6 col-xs-12">

                <div class="input-group">
                   {!!Form::date('match_date', old('match_date'),['class'=>'form-control'])  !!}


                </div>
            </div>
            <!-- /.input group -->
        </div>

            <div class="form-group">
                <label class="col-md-3 col-xs-12 control-label">Match Time</label>
                <div class="col-md-6 col-xs-12">

                <div class="input-group">
                    {!!Form::time('match_time', old('match_time'),['class'=>'form-control'])  !!}


                </div>
                </div>
                <!-- /.input group -->
            </div>




    </div>
    <div class="panel-footer">
        <button type="submit" class="btn btn-primary col-lg-offset-8">Submit</button>
    </div>
</div>
