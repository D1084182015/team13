@extends('app')

@section('title', '編輯單一農產品資料')

@section('product_contents')
<h1>編輯農產品資料</h1>
<form method="post" action="/products/{{$product->id}}">
    @method("put")
    @csrf

    <table border="1">
        <tr>
            <td>編號</td>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <td>交易日期</td>
            <td><input type="text" name="transaction_date" value="{{ $product->transaction_date }}"/></td>
        </tr>
        <tr>
            <td>農產品種類</td>
            <td><input type="text" name="product" value="{{ $product->product }}"/></td>
        </tr>
        <tr>
            <td>交易市場</td>
            <td><input type="text" name="mid" value="{{ $product->mid }}"/></td>
        </tr>
        <tr>
            <td>上價</td>
            <td><input type="text" name="high_price" value="{{ $product->high_price }}"/></td>
        </tr>
        <tr>
            <td>中價</td>
            <td><input type="text" name="midium_price" value="{{ $product->midium_price }}"/></td>
        </tr>
        <tr>
            <td>下價</td>
            <td><input type="text" name="low_price" value="{{ $product->low_price }}"/></td>
        </tr>
        <tr>
            <td>平均價</td>
            <td><input type="text" name="average_price" value="{{ $product->average_price }}"/></td>
        </tr>
        <tr>
            <td>交易量</td>
            <td><input type="text" name="trading_volume" value="{{ $product->trading_volume }}"/></td>
        </tr>

    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>




</form>
@endsection
