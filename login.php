<html>
<head>
<meta http-equiv="Conten-Type" content = "test/html; charset = utf-8">
<link rel = stylesheet type = "text/css" href = style-sheet.css>
<title>KJ法支援アプリ</title>

<script type = "text/javascript">
function post( where ){
	where += '.php'
	document.getElementById('form').action = where;
	document.form.submit();
}
</script>




</head>

<body>

<?php
include('header.html');
?>

<br><br>
<div id = main>
<br>
<div id = login>

<form method = post action = menu.php name = form id = form>

<input type = text size = 30 name = u_id><br><br>
<input type = password size = 30 name = u_id>

<br><br><br>
<input type = "button" value="ログイン" onclick = post("menu")>

</form>

</div><!-- login終わり -->
<br>
</div><!-- main終わり-->

</body>
</html>
