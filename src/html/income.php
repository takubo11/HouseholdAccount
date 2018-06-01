<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>収入入力</title>
</head>
<body>
<?php echo 'phpからHello World!'?>
	<form method="post" action="input_income.php">
		<label for="日付">日付</label>
		<input name="created_time" id="created_tiem" value="">

		</br>

		<label for="say">費目</label>
		<select name="account_id" id ="account_id">
			<option value="サンプル1">サンプル1</option>
			<option value="サンプル2">サンプル2</option>
		</select>

		</br>

		<label for="amount">金額</label>
		<input name="amount" id="amount" value="0">

		</br>

		<input type="submit">
	</form>
</body>
</html>