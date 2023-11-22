<html>

<head>
    <title>列出所有選手</title>
</head>

<body>
<h1>列出所有選手</h1>

@for($i=0; $i<count($players); $i++)
    {{ $players[$i]['name'] }} <br/>
    {{ $players[$i]['tid'] }} <br/>
    {{ $players[$i]['postition'] }} <br/>
@endfor

</body>
</html>
