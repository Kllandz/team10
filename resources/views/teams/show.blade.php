@extends('app')

@section('title', '網站英雄聯盟全球總決賽網站 - 列出所有隊伍')

@sectiom('lol_theme', '職業隊伍')

@section('worlds_contents')
隊伍編號:{{ $team->id }}<br/>
隊伍名稱:{{ $team->team }}<br/>
隊伍年份:{{ $team->year }}<br/>
隊伍賽區:{{ $team->divison }}<br/>
隊伍賽區排名:{{ $team->rank }}<br/>
隊伍今年勝率:{{ $team->rate }}<br/>
隊伍歷年勝率:{{ $team->pastrate }}<br/>
隊伍總場次:{{ $team->games }}<br/>
隊伍建立日期:{{ $team->founded }}<br/>
<h1>{{ $team->team }}的所有選手</h1>

<table>
    <tr>
        <td>編號</td>
        <td>選手</td>
        <td>所屬隊伍</td>
        <td>位置</td>
        <td>國籍</td>
        <td>年齡</td>
        <td>年資</td>
        <td>性別</td>
    </tr>
    @foreach ($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->team->team }}</td>
            <td>{{ $player->postition }}</td>
            <td>{{ $player->nationality }}</td>
            <td>{{ $player->age }}</td>
            <td>{{ $player->year }}</td>
            <td>{{ $player->gender }}</td>
        </tr>
    @endforeach
<table>
@endsection