<html>
<head>
    <meta charset="UTF-8"/>
    <title>顯示所有農產品資料</title>
</head>
<body>
<h1>顯示所有農產品資料</h1>
<a href="products/create">新增農產品</a>
<table border="1">
<tr>
    <th>編號</th>
    <th>交易日期</th>
    <th>農產品種類</th>
    <th>交易市場</th>
    <th>上價</th>
    <th>中價</th>
    <th>下價</th>
    <th>平均價</th>
    <th>交易量</th>
    <th>操作一</th>
    <th>操作二</th>
    <th>操作三</th>

</tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->transaction_date }}</td>
            <td>{{ $product->product }}</td>
            <td>{{ $product->mid }}</td>
            <td>{{ $product->high_price }}</td>
            <td>{{ $product->midium_price }}</td>
            <td>{{ $product->low_price }}</td>
            <td>{{ $product->average_price }}</td>
            <td>{{ $product->trading_volume }}</td>
            <td>
                <a href="products/{{$product->id}}">
                    詳細
                </a>
            </td>
            <td>
                <a href="products/{{$product->id}}/edit">
                    修改
                </a>
            </td>
            <td>
                <form method ="post" action="products/{{$product->id}}">
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
