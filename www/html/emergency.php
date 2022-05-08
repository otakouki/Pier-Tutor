<?php session_start();
if (isset($_SESSION['id'])) {
$username = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="./css/emergency.css">
<script type="text/javascript">
    function chkradio(obj){
  var objID = obj.getAttributeNode('id').nodeValue;
     var chkID = document.getElementById('spl');
  if(objID=='rb4'){/*ID名が'rb4'のラジオボタンにチェックが入ったら*/
        chkID.style.visibility='visible';/*入力欄表示*/
          }
     else{ /*その他のラジオボタンにチェックが入ったら*/
        chkID.style.visibility = 'hidden';/*非表示*/
         }
  }
</script>
</head>

<h1>安否確認</h1>
<form action="emergency_ins.php" method="post" autocomplete=off>

<div>
    <label>名前：<label>
    <input type="text" name="name" value="<?=$username; ?>" readonly>
</div>
<div>
    <label>安全か危険か<label>
    <label><input class="js-check" id="rb1" type="radio" name="check_name" value="安全"checked onclick="chkradio(this);" />安全</label>
    <input class="js-check" id="rb4" type="radio" name="check_name" value="危険" onclick="chkradio(this);"/><label for="rb4" >危険</label>
</div>
<div>
    <span id="spl"><label>状態</label>
    <input type="text" name="situation"/>
</span>
</div>
<input type="submit" value="新規登録">
</form>
<button type=“button” onclick="location.href='./index.php'">安否確認</button>


<?php
}else {//ログインしていない時
    ?>
    <META http-equiv="Refresh" content="0;URL=./login_form.php">
    <?php
}
?>
</html>