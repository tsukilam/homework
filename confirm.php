<?php
  session_start();

  $name = $_POST['name'];
  $hobby = $_POST['email'];
  $gender = $_POST['gender'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['gender'] = $_POST['gender'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>確認画面</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
       <div>
            <h1>確認画面</h1>
       </div>
    </header>
</div>
<hr>
<p>あなたの名前は <?php echo $name;?> さんです。</p>
<p>メールアドレスは <?php echo $hobby;?> です。</p>

<p>性別は <?php if( $gender === "1" ){ echo '男性'; }
		elseif( $gender === "2" ){ echo '女性'; }
		elseif( $gender === "9" ){ echo 'その他'; }
?> です。</p>
<p>こちらの情報でよろしいですか？</p>
<form action="complete.php" method="POST">
<div class="button-wrapper">
    <button type="button" onclick="history.back()">戻る</button>
	<button type="submit" class="btn btn--naby btn--shadow">登録する</button>
</div>
</form>
<hr>
<div class="container">
    <footer>
        <p>CCC.</p>
    </footer>
</div>
</body>
</html>
