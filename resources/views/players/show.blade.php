@extends('app')

@section('title', '網站英雄聯盟全球總決賽網站 - 列出所有選手')

@sectiom('lol_theme', '職業選手')

@section('worlds_contents')
選手編號:{{ $player->id }}<br/>
選手名字:{{ $player->name }}<br/>
所屬隊伍:{{ $player->team->team }}<br/>
選手位置:{{ $player->postition }}<br/>
選手國籍:{{ $player->nationality }}<br/>
選手年齡:{{ $player->age }}<br/>
選手年資:{{ $player->year }}<br/>
選手性別:{{ $player->gender }}<br/>
@endsection