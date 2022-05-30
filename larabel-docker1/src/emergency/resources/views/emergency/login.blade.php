@extends('...layouts.login')

@section('emergency_login_index')
    投稿作成<br>

    <form action='{{ route("emergency_login_select") }}' method='post'>
        {{ csrf_field() }}
        <!-- ユーザー名:<input type="text" name= "user_name"><br> -->
        メールアドレス:<input type="text" name= "mail"><br>
        パスワード:<input type="text" name= "password"><br>
        <!-- 役職:<input type="text" name = "department"><br> -->
        <input type='submit' value='ログイン'><br>
    </form>
    <input type="button" onclick="location.href='/emergency/add'" value="新規登録ページへ">
@endsection
