<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有市場資料</title>
</head>
<body>
<h1>顯示所有市場資料 </h1>
<a href="{{ route('markets.create') }}">新增市場資料</a>&nbsp;
<a href="{{ route('products.index') }}">所有農產品</a><br/>
<h2></h2>
<a href="{{ route('markets.index') }}">所有市場資料</a>&nbsp;
<a href="{{ route('markets.north') }}">北部市場</a>&nbsp;
<a href="{{ route('markets.south') }}">南部市場</a>&nbsp;
<a href="{{ route('markets.middle') }}">中部市場</a>&nbsp;
<a href="{{ route('markets.east') }}">東部市場</a>
<table border="1">
    <tr>
        <!--<th>編號</th>-->
        <th>市場</th>
        <th>區別</th>
        <th>地址</th>
        <th>操作一</th>
        <th>操作二</th>
        <th>操作三</th>
    </tr>
    @foreach($markets as $market)
        <tr>
            <!--<td>{{ $market->id }}</td>-->
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
