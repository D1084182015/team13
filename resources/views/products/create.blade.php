@extends('app')

@section('title', '新增單一農產品資料')

@section('product_contents')
<h1>新增農產品資料</h1>
<form method="post" action="/products">
    @csrf

    <table border="1">
        <tr>
            <td>交易日期</td>
            <td>
                <label for="transaction_date"></label>
                <input type="date" name="transaction_date">
            </td>
        </tr>
        <tr>
            <td>農產品種類</td>
            <td><input type="text" name="product" /></td>
        </tr>
        <tr>
            <td>交易市場</td>
            <td>
                <select name="mid">
                    <option value="">選擇市場</option>
                    <option value="1" selected>台北一</option>
                    <option value="2">台北二</option>
                    <option value="3">板橋區</option>
                    <option value="4">三重區</option>
                    <option value="5">宜蘭市</option>
                    <option value="6">台中市</option>
                    <option value="7" >鳳山區</option>
                    <option value="8">嘉義市</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>上價</td>
            <td><input type="text" name="high_price" /></td>
        </tr>
        <tr>
            <td>中價</td>
            <td><input type="text" name="midium_price" /></td>
        </tr>
        <tr>
            <td>下價</td>
            <td><input type="text" name="low_price"/></td>
        </tr>
        <tr>
            <td>平均價</td>
            <td><input type="text" name="average_price"/></td>
        </tr>
        <tr>
            <td>交易量</td>
            <td><input type="text" name="trading_volume"/></td>
        </tr>

    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>


</form>
@endsection

