@extends('app')

@section('title', '列出所有隊員')

@section('lol_contents')

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    <a href="{{ route('players.create') }} ">新增球員</a>
    <a href="{{ route('players.index') }} ">所有球員</a>
    <a href="{{ route('players.senior') }} ">資深隊員</a>
</div>


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
        <td>{{ $player->team->team }}</td>
        <td>{{ $player->postition }}</td>
        <td>{{ $player->nationality }}</td>
        <td>{{ $player->age}}</td>
        <td>{{ $player->year }}</td>
        <td>{{ $player->gender }}</td>
        <td><a href="{{ route('players.show', ['id'=>$player->id]) }}">顯示</a></td>
        <td><a href="{{ route('players.edit', ['id'=>$player->id]) }}">修改</a></td>  
        <td>
                <form action="{{ url('/players/delete', ['id' => $player->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
    </tr>
@endforeach

<table>


@endsection