<html>

<head>
<title> 列出所有選手</title>
</head>

<body>
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
@for($i=0;$i<count($players);$i++)
<tr>
        <td>{{ $players[$i]['id'] }}</td>
        <td>{{ $players[$i]['name'] }}</td>
        <td>{{ $players[$i]['tid'] }}</td>
        <td>{{ $players[$i]['postition'] }}</td>
        <td>{{ $players[$i]['nationality'] }}</td>
        <td>{{ $players[$i]['age'] }}</td>
        <td>{{ $players[$i]['year'] }}</td>
        <td>{{ $players[$i]['gender'] }}</td>
        <td><a href="{{ route('players.show', ['id'=>$players[$i]['id']]) }}">顯示</a></td>
        <td><a href="{{ route('players.edit', ['id'=>$players[$i]['id']]) }}">修改</a></td>  
    </tr>
@endfor






</body>


</html>