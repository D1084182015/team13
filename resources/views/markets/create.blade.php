@extends('app')

@section('title', '新增單一市場資料')

@section('product_contents')
<h1>新增市場資料</h1>
<form method="post" action="/markets/">
    @csrf

    <table border="1">

        <tr>
            <td>市場</td>
            <td><input type="text" name="market" /></td>
        </tr>
        <tr>
            <td>區別</td>
            <td><input type="text" name="zone" /></td>
        </tr>
        <tr>
            <td>地址</td>
            <td><input type="text" name="address"/></td>
        </tr>


    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>


</form>
@endsection

