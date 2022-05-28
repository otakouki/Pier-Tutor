<h1>新規会員登録</h1>
<form action="register.php" method="post">
<div>
    <label>名前：<label>
    <input type="text" name="name" required>
</div>
<div>
    <label>メールアドレス：<label>
    <input type="email" name="mail" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" title="smple@example.comのように書いてください" required>
</div>
<div>
    <label>パスワード：<label>
    <input type="password" name="pass" required>
</div>
<div>
    <label>部署:<label>
    <select name="department">
<option value="総務">総務部</option>
<option value="人事">人事部</option>
<option value="経理">経理部</option>
<option value="営業">営業部</option>
<option value="開発">開発部</option>
<option value="事業">事業部</option>
<option value="製造">製造部</option>
    </select>
</div>
<input type="submit" value="新規登録">
</form>
<p>すでに登録済みの方は<button type=“button” onclick="location.href='login_form.php'">こちら</button></p>