<div class="form-group">
    {!! Form::label('id', '隊伍名稱：') !!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('team', '隊伍:') !!}
    <!-- 待設計一下拉式選單 -->
</div>
<div class="form-group">
    {!! Form::label('year','年份:') !!}
    {!! Form::date('year',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('divison','賽區:') !!}
    {!! Form::date('divison',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rank','賽區排名:') !!}
    {!! Form::date('rank',null ,['class'=>'form-control']) !!}
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