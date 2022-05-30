@extends('...layouts.board_add_layout')

@section('emergency_board_add')
    投稿作成<br>

    <form action='{{ route("emergency_board_ins") }}' method='post'>
        {{ csrf_field() }}
        <!-- ユーザー名:<input type="text" name= "user_name"><br> -->
        <!-- メールアドレス:<input type="text" name= "mail"><br> -->
        状態:<input type="text" name= "check_name"><br>
        状態の説明:<input type="text" name = "situation"><br>
            <input type='submit' value='登録'><br>
    </form>
    <input type="button" onclick="location.href='/emergency/sec'" value="ログインページへ">

@endsection
