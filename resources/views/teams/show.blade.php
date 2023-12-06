@extends('app')

@section('title', '英雄聯盟全球總决賽網站 - 列出所有隊伍')

@section('worlds_contents')
<h1>列出選擇隊伍</h1>
<table>
<td>編號:{{$team['id']}}</tr>
<td>隊伍:{{$team['team']}}</tr>
<td>年份:{{$team['year']}}</tr>
<td>賽區:{{$team['divison']}}</tr>
<td>賽區排名:{{$team['rank']}}</tr>
<td>今年勝率:{{$team['rate']}}</tr>
<td>歷年勝率:{{$team['pastrate'] }}</tr>
<td>總場數:{{$team['games']}}</tr>
<td>成立日期:{{$team['founded']}}</tr>
<table>

<h1>{{ $team->team }}的所有隊員</h1>

<table>
    <tr>
        <th>編號</th>
        <th>選手</th>
        <td>隊伍</td>
        <th>位置</th>
        <th>國籍</th>
        <th>年齡</th>
        <th>年資</th>
        <th>性別</th>
    </tr>
    @foreach($players as $player)
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