@extends('app')

@section('title', '列出所選隊員')

@section('lol_contents')

<h1> 所選選手資料 </h1><br/>

<table>

編號：{{ $player->id }}<br/>
選手：{{ $player->name }}<br/>
隊伍：{{ $player->tid }}<br/>
位置：{{ $player->postition}}<br/>
國籍：{{ $player->nationality }}<br/>
年齡：{{ $player->age }}<br/>
年資：{{ $player->year }}<br/>
性別：{{ $player->gender }}<br/>
<table\>

@endsection
