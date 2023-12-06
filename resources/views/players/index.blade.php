@extends('app')

@section('title', '列出所有隊員')

@section('lol_contents')

<h1>列出所有隊員</h1>

<table>
    <tr>
        <td>編號</td>
        <td>選手</td>
        <td>隊伍</td>
        <td>位置</td>
        <td>國籍</td>
        <td>年齡</td>
        <td>年資</td>
        <td>性別</td>
    </tr>
@foreach($players as $player)
<tr>
        <td>{{ $player->id }}</td>
        <td>{{ $player->name}}</td>
        <td>{{ $player->tid}}</td>
        <td>{{ $player->postition }}</td>
        <td>{{ $player->nationality }}</td>
        <td>{{ $player->age}}</td>
        <td>{{ $player->year }}</td>
        <td>{{ $player->gender }}</td>
        <td><a href="{{ route('players.show', ['id'=>$player->id]) }}">顯示</a></td>
        <td><a href="{{ route('players.edit', ['id'=>$player->id]) }}">修改</a></td>  
        <td>刪除</td>
    </tr>
@endforeach

<table>


@endsection