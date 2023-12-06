@extends('app')

@section('title', '列出所選的戰隊')

@section('lol_contents')

<h1> 所選隊伍資料 </h1><br/>


編號：{{ $teams->id }}<br/>
選手：{{ $teams->team }}<br/>
隊伍：{{ $teams->year }}<br/>
位置：{{ $teams->division}}<br/>
國籍：{{ $teams->rank }}<br/>
年齡：{{ $teams->rate }}<br/>
年資：{{ $teams->pastrate }}<br/>
性別：{{ $teams->games }}<br/>
性別：{{ $teams->founded }}<br/>

@endsection
