<?php
	function array_orderby()
		{
			$args = func_get_args();
			$data = array_shift($args);
			foreach ($args as $n => $field) {
				if (is_string($field)) {
					$tmp = array();
					foreach ($data as $key => $row)
						$tmp[$key] = $row[$field];
					$args[$n] = $tmp;
				}
			}
			$args[] = &$data;
			call_user_func_array('array_multisort', $args);
			return array_pop($args);
		}
?>

<?php
	// default values
	$orderValue = 1;
	$orderField = '';
	$orderASC = true;

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["orderoptions"])) {
		$orderValue = $_POST['orderoptions'];
		switch ($orderValue) {
			case 2:
				$orderField = 'brand';
				$orderASC = true;
				break;
			case 3:
				$orderField = 'price';
				$orderASC = false;
				break;
			case 4:
				$orderField = 'price';
				$orderASC = true;
				break;
			case 5:
				$orderField = 'millage';
				$orderASC = false;
				break;
			case 6:
				$orderField = 'millage';
				$orderASC = true;
				break;
			case 7:
				$orderField = 'year';
				$orderASC = false;
				break;
			case 8:
				$orderField = 'year';
				$orderASC = true;
				break;
			default:
				$orderField = 'year';
				$orderASC = true;
		}

		$cars = array_orderby($cars, $orderField, ($orderASC ? SORT_ASC : SORT_DESC));
	}
?>
