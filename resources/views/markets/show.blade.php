@extends('app')

@section('title', '編輯單一市場資料')

@section('product_contents')
<h1>顯示單一市場資料</h1>
<table border="1">
    <tr>
        <td>編號</td>
        <td>{{ $market->id }}</td>
    </tr>
    <tr>
        <td>市場</td>
        <td>{{ $market->market }}</td>
    </tr>
    <tr>
        <td>區別</td>
        <td>{{ $market->zone }}</td>
    </tr>
    <tr>
        <td>地址</td>
        <td>{{ $market->address  }}</td>
    </tr>

</table>
@endsection
