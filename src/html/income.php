<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>収入入力</title>
</head>
<body>

<?php $items = $_SESSION['items']; echo $items ?>
	<form method="post" action="input_income.php">
		<label for="日付">日付</label>
		<input name="created_time" id="created_tiem" value="">

		</br>

		<label for="say">費目</label>

        <select name="account_id" id ="account_id">
			<?php $items = $_SESSION['items']; foreach($items as $item ){ ?>
                <option value="<?php echo $item['id'] ?>"> <?php echo $item['name'] ?> </option>
			<?php } ?>
		</select>

		</br>

		<label for="amount">金額</label>
		<input name="amount" id="amount" value="0">

		</br>

		<input type="submit">
	</form>
</body>
</html>