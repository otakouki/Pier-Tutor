@extends('...layouts.layout')

@section('emergency_login_add')
    投稿作成<br>

    
    <form action='{{ route("emergency_login_create") }}' method='post'>
        {{ csrf_field() }}
        ユーザー名:<input type="text" name= "user_name" value="{{$name}}"><br>
        メールアドレス:<input type="text" name= "mail" value="{{$mail}}"><br>
        パスワード:<input type="text" name= "password" value="{{$password}}"><br>
        役職:<input type="text" name = "department" value="{{$department}}"><br>
            <input type='submit' value='登録'><br>
    </form>
    <input type="button" onclick="location.href='/emergency/sec'" value="ログインページへ">

@endsection
