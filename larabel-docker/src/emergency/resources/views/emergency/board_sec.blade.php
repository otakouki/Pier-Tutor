@extends('...layouts.board_sec_layout')

@section('emergency_board_index')
    投稿作成<br>

    <form>
        {{ csrf_field() }}
        
    <input type="button" onclick="location.href='/emergency/board_add'" value="安否登録ページへ">
    <input type="button" onclick="location.href='/emergency/logout'" value="ログアウト">
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th >名前</th>
                    <th>メールアドレス</th>
                    <th>状態</th>
                    <th>状態の確認</th>
                </tr>
            </thead>
        @foreach($data as $cont)
        <tbody>
        <tr>
            <td>{{$cont->user_name}}</td>
            <td>{{$cont->mail}}</td>
            <td>{{$cont->check_name}}</td>
            <td>{{$cont->situation}}</td>
        </tr>
    </tbody>
        @endforeach
        </table>
    </div>
    </form>

@endsection
