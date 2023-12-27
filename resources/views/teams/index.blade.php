

@extends('app')

@section('title', '英雄聯盟全球總决賽網站 - 列出所有戰隊')

@section('worlds_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('teams.create') }} ">新增隊伍</a>
    <a href="{{ route('teams.index') }} ">所有隊伍</a>
</div>
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
        <td>
                <form action="{{ url('/teams/delete', ['id' => $team->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
    </tr>
@endforeach
<table>
@endsection