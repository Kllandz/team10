<div class="form-group">
    {!! Form::label('name', '隊員姓名：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid', '所屬戰隊：') !!}
    {!! Form::select('tid', $teams, $teamSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('postition','位置:') !!}
    {!! Form::text('postition',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nationality','國籍:') !!}
    {!! Form::text('nationality',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('age', '年齡：') !!}
    {!! Form::text('age', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('year', '年資：') !!}
    {!! Form::text('year', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('gender', '性別：') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>