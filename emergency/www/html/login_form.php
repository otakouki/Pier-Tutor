<h1>ログインページ</h1>
<form action="login.php" method="post">
<div>
    <label>メールアドレス：<label>
    <input type="email" name="mail" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" title="smple@example.comのように書いてください" required>
</div>
<div>
    <label>パスワード：<label>
    <input type="password" name="pass" required>
</div>
<input type="submit" value="ログイン">
<button type=“button” onclick="location.href='./signup.php'">新規登録</button>
</form>