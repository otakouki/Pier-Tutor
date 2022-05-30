<body>
  <div class="form_container">
    <form action="{{ url('/message/add')}}" method="POST" class="form-horizontal">
        @csrf
        ユーザー名:<input type="text" name= "user_name">
        メールアドレス:<input type="text" name= "mail">
        パスワード:<input type="text" name= "password">
        役職:<input type="text" name = "department">
        <button type="submit" name="add">
            追加
        </button>
      </form>
  </div><!-- /.form_container -->
</body>