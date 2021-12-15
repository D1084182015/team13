<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有市場資料</title>
</head>
<body>
<h1>顯示所有市場資料 </h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>市場</th>
        <th>區別</th>
        <th>地址</th>
        <th>操作一</th>
        <th>操作二</th>
        <th>操作三</th>
    </tr>
    @foreach($markets as $market)
        <tr>
            <td>{{ $market->id }}</td>
            <td>{{ $market->market }}</td>
            <td>{{ $market->zone }}</td>
            <td>{{ $market->address  }}</td>
            <td>
                <a href="markets/{{$market->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="markets/{{$market->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method ="post" action="markets/{{$market->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除">
                </form>

            </td>
        </tr>
    @endforeach
</table>
</body>
</html>