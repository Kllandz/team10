
@extends('app')

@section('title', 'LOL - 列出所有戰隊')

@section('lol_theme', '戰隊成員')

@section('lol_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('teams.create') }} ">新增戰隊</a>
    @endcan
    <a href="{{ route('teams.index') }} ">所有戰隊</a>
    <a href="{{ route('teams.rank1') }} ">排名1戰隊</a>
    <a href="{{ route('teams.rank2') }} ">排名2戰隊</a>
    <a href="{{ route('teams.rank3') }} ">排名3戰隊</a>
    <a href="{{ route('teams.rank4') }} ">排名4戰隊</a>

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
        <td>操作1</td>
        @can('admin')
        <td>操作2</td>
        <td>操作3</td>
        @elsecan('manager')
        <th>操作2</th>
        @endcan
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
        @can('admin')
        <td><a href="{{ route('teams.edit', ['id'=>$team->id]) }}">修改</a></td>    
        <td>
                <form action="{{ url('/teams/delete', ['id' => $team->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
            @elsecan('manager')
            <td><a href="{{ route('teams.edit', ['id'=>$team->id]) }}">修改</a></td>    
            @endcan
    </tr>
@endforeach
<table>

@endsection