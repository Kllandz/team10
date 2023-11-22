<html>

<head>
<title> 列出所有隊 </title>
</head>

<body>
    <h1>列出所有隊員</h1>

@for($i=0;$i<count($players);$i++)
    {{players[i]['name']}}<br/>
@endfor






</body>


</html>