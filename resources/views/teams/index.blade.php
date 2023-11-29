<html>

<head>
    <title>列出所有隊伍</title>
</head>

<body>
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
@for($i=0; $i<count($teams); $i++)
    <tr>
        <td>{{ $teams[$i]['id'] }}</td>
        <td>{{ $teams[$i]['team'] }}</td>
        <td>{{ $teams[$i]['year'] }}</td>
        <td>{{ $teams[$i]['divison'] }}</td>
        <td>{{ $teams[$i]['rank'] }}</td>
        <td>{{ $teams[$i]['rate'] }}</td>
        <td>{{ $teams[$i]['pastrate'] }}</td>
        <td>{{ $teams[$i]['games'] }}</td>
        <td>{{ $teams[$i]['founded'] }}</td>
        <td><a href="{{ route('teams.show', ['id'=>$teams[$i]['id']]) }}">顯示</a></td>
        <td><a href="{{ route('teams.edit', ['id'=>$teams[$i]['id']]) }}">修改</a></td>    
    </tr>
@endfor

</body>
</html>
