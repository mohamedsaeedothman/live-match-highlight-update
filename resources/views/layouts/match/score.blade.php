<div class="form-group">
    <label class="col-md-3 col-xs-12 control-label">Score Of First Team </label>
    <div class="col-md-6 col-xs-12">
        <div class="input-group">
            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
            {!! Form::number('first_team_score', old('first_team_score'),['class'=>'form-control','min'=>0]) !!}
        </div>
        <span class="help-block">Required </span>
    </div>
</div>
<div class="form-group">
    <label class="col-md-3 col-xs-12 control-label">Score Of Second Team </label>
    <div class="col-md-6 col-xs-12">
        <div class="input-group">
            <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
            {!! Form::number('second_team_score', old('second_team_score'),['class'=>'form-control','min'=>0]) !!}
        </div>
        <span class="help-block">Required </span>
    </div>
</div>