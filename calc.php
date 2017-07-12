<?php
$output = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	// TODO: проверить все ли поля пришли?
	$num1 = cleanInt($_POST['num1']);
	$num2 = cleanInt($_POST['num2']);
	$operator = cleanStr($_POST['operator']);
	$output = "$num1 $operator $num2 = ";
	switch ($operator){
		case '+':
			$output .= $num1 + $num2;
			break;
		case '-':
			$output .+ $num1 - $num2;
			break;
		case '*':
			$output .= $num1 * $num2;
			break;
		case '/':
			if ($num2 == 0){
				$output = "Деление на 0, Вась!";
			}else{
				$output .= $num1 / $num2;
			}break;
		default: $output = "Операцию '$operator' я еще не умею делать..";
	}
}
if ($output){
	echo "<h3>Результрат $output</h3>";
}
?>
<form action='' method="post">
	<label>Число 1:</label><br />
	<input name='num1' value="<?= $num1?>" type='text'/><br />
	<label>Оператор: </label><br />
	<input name='operator' value="<?= $operator?>" type='text'/><br />
	<label>Число 2: </label><br />
	<input name='num2' value="<?= $num2?>" type='text'/><br /><br />
	<input type='submit' value='Считать'>
</form>