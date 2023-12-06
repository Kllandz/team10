

@extends('app')

@section('title', '英雄聯盟全球總决賽網站 - 列出所有戰隊')

@section('worlds_contents')
<h1>列出所有隊伍</h1>
<table>
    <tr>
        <td>編號</td>
        <td>隊伍</td>
        <td>年份</td>
        <td>賽區</td>
        <td>賽區排名</td>
        <td>今年勝率</td>
        <td>歷年勝率</td>
        <td>總場數</td>
        <td>成立日期</td>
    </tr>
@foreach($teams as $team)
    <tr>
        <td>{{ $team->id }}</td>
        <td>{{ $team->team }}</td>
        <td>{{ $team->year }}</td>
        <td>{{ $team->divison }}</td>
        <td>{{ $team->rank }}</td>
        <td>{{ $team->rate }}</td>
        <td>{{ $team->pastrate }}</td>
        <td>{{ $team->games }}</td>
        <td>{{ $team->founded }}</td>
        <td><a href="{{ route('teams.show', ['id'=>$team->id]) }}">顯示</a></td>
        <td><a href="{{ route('teams.edit', ['id'=>$team->id]) }}">修改</a></td>   
        <td>刪除</td> 
    </tr>
@endforeach
<table>
@endsection