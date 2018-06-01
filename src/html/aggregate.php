<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<script type="text/javascript">

		//イベント処理を追加
		window.onload = function(){
			alert("onloadが呼び出されました");
			aggregate_label = document.getElementById("aggregate");
			aggregate_label.onclick = fnc1;

			income_label = document.getElementById("income");
			income_label.onclick = submitForm;

			expence_label = document.getElementById("expence");
			expence_label.onclick = submitForm;

		}

		function fnc1(){ alert("関数１が呼び出されました"); }

		function submitForm( value ){
			var form = document.createElement( ‘form’ );
			document.body.appendChild( form );
			var input = document.createElement( ‘input’ );
			input.setAttribute( ‘type’ , ‘hidden’ );
			input.setAttribute( ‘name’ , ‘name’ );
			input.setAttribute( ‘value’ , value );
			form.appendChild( input );
			form.setAttribute( ‘action’ , ‘income.php’ );
			form.setAttribute( ‘method’ , ‘get’ );
			form.submit();
		}
	</script>
    <title>集計表示</title>
</head>
<body>
	<span id="aggregate">
		集計表示
	</span>
	&nbsp;

	<span id="income">
		収入入力
	</span>
	&nbsp;

	<span id="expence">
		支出入力
	</span>
	&nbsp;

</body>
</html>