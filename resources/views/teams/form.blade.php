<div class="form-group">
    {!! Form::label('team', '隊伍：') !!}
    {!! Form::text('team', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('year','年份:') !!}
    {!! Form::text('year',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('divison','賽區:') !!}
    {!! Form::text('divison',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rank', '賽區排名：') !!}
    {!! Form::text('rank', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rate', '今年勝率：') !!}
    {!! Form::text('rate', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('pastrate', '歷年勝率：') !!}
    {!! Form::text('pastrate', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('games', '總場數：') !!}
    {!! Form::text('games', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('founded', '成立日期：') !!}
    {!! Form::text('founded', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>