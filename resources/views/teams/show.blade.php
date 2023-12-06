@extends('app')

@section('title', '列出所選的戰隊')

@section('lol_contents')

<h1>顯示單一戰隊</h1>

編號：{{ $team->id }}<br/>
隊伍：{{ $team->team}}<br/>
年分：{{ $team->year }}<br/>
賽區：{{ $team->divison}}<br/>
賽區排名：{{ $team->rank }}<br/>
今年勝率：{{ $team->rate }}<br/>
歷年勝率：{{ $team->pastrate }}<br/>
總場數：{{ $team->games }}<br/>
成立日期：{{ $team->founded }}<br/>

<h1>{{ $team->team }}的所有隊員</h1>

<table>
    <tr>
        <th>編號</th>
        <th>選手</th>
        <th>隊伍</th>
        <th>位置</th>
        <th>國籍</th>
        <th>年齡</th>
        <th>年資</th>
        <th>性別</th>
    </tr>  
@foreach ($players as $player)
    <tr>
        <td>{{ $player->id }}</td>
        <td>{{ $player->name}}</td>
        <td>{{ $player->team->team }}</td>
        <td>{{ $player->postition }}</td>
        <td>{{ $player->nationality }}</td>
        <td>{{ $player->age}}</td>
        <td>{{ $player->year }}</td>
        <td>{{ $player->gender }}</td>
    </tr>

@endforeach
<table>

@endsection
