<div class="form-group">
    {!! Form::label('name', '選手姓名：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid', '所屬隊伍：') !!}
    <!-- 待設計一下拉式選單 -->
</div>
<div class="form-group">
    {!! Form::label('postition','位置:') !!}
    {!! Form::date('postition',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nationality','國籍:') !!}
    {!! Form::date('nationality',null ,['class'=>'form-control']) !!}
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
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>